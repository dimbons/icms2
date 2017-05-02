<?php

class actionGroupsGroupEnter extends cmsAction {

    public $lock_explicit_call = true;

    public function run($group){

        if($group['access']['is_member'] || !$group['is_closed']){
            $this->redirectToAction($group['slug']);
        }

        if ($this->model->getMembership($group['id'], $this->cms_user->id)){
            $this->redirectToAction($group['slug']);
        }

        $is_send_request = $this->model->getInviteRequest($group['id'], $this->cms_user->id);

        if($is_send_request){

            cmsUser::addSessionMessage(LANG_GROUPS_REQ_ERROR, 'error');

            $this->redirectToAction($group['slug']);

        }

        $this->model->addInvite(array(
            'group_id' => $group['id'],
            'user_id'  => $this->cms_user->id
        ));

        $messenger = cmsCore::getController('messages');

        $staff = $this->model->getMembers($group['id'], groups::ROLE_STAFF);

        foreach($staff as $user){

            $messenger->clearRecipients()->addRecipient($user['id']);

            //
            // Личное сообщение
            //
            $sender_link = '<a href="'.href_to('users', $this->cms_user->id).'">'.$this->cms_user->nickname.'</a>';
            $group_link = '<a href="'.href_to('groups', $group['slug']).'">'.$group['title'].'</a>';

            $notice = array(
                'content' => sprintf(LANG_GROUPS_REQUEST_NOTICE, $sender_link, $group_link),
                'options' => array(
                    'is_closeable' => true
                ),
                'actions' => array(
                    'accept' => array(
                        'title' => LANG_ACCEPT,
                        'controller' => $this->name,
                        'action'     => 'accept_request',
                        'params'     => array($group['id'], $this->cms_user->id)
                    ),
                    'decline' => array(
                        'title'      => LANG_DECLINE,
                        'controller' => $this->name,
                        'action'     => 'decline_request',
                        'params'     => array($group['id'], $this->cms_user->id)
                    )
                )
            );

            $messenger->sendNoticePM($notice, 'groups_invite');

            //
            // E-mail
            //
            $messenger->sendNoticeEmail('groups_request', array(
                'user_nickname' => $this->cms_user->nickname,
                'user_url'      => href_to_abs('users', $this->cms_user->id),
                'group_title'   => $group['title'],
                'group_url'     => href_to_abs('groups', $group['slug'])
            ), 'groups_invite');

        }

        cmsUser::addSessionMessage(LANG_GROUPS_REQ_SUCCESS, 'success');

        $this->redirectToAction($group['slug']);

    }

}
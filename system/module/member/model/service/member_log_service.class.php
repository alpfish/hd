<?php
/**
 *      [Haidao] (C)2013-2099 Dmibox Science and technology co., LTD.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      http://www.haidao.la
 *      tel:400-600-2042
 */
class member_log_service extends service {
	public function _initialize() {
         $this->model = $this->load->table('member/member_log');
	}
	public function add($params){
		runhook('member_log_add',$params);
        return $this->model->update($params);
    }
}
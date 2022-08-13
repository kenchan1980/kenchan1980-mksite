<?php
// �^�C���]�[������{�ɐݒ�
date_default_timezone_set('Asia/Tokyo');
 
// �擾������RSS��URL��ݒ�
$url = "http://kenchan1980.sakura.ne.jp/kmsite/wp/feed/";
// MAX�̕\��������ݒ�
$max = 5;
 
// simplexml_load_file()��RSS���p�[�X���ăI�u�W�F�N�g���擾�A�I�u�W�F�N�g����łȂ���΃u���b�N��������
if( $rss = simplexml_load_file( $url ) ){
	$cnt = 0;
	$output = '';
	/*
	* $item->title�F�^�C�g��
	* $item->link�F�����N
	* strtotime( $item->pubDate )�F�X�V������UNIX TIMESTAMP
	* $item->description�F�ڍ�
	*/
	// item���ɏ���
	foreach( $rss->channel->item as $item ){
		// MAX�̕\�������𒴂�����I��
		if( $cnt >= $max ) break;
 
		// ���t�̕\�L�̐ݒ�
		$date = date( 'Y�Nm��d', strtotime( $item->pubDate ) );
		// �o�͂��镶�����p��
		$output .= '<a href="'. $item->link .'">' . $date . " " . $item->title . '</a><br>';
		$cnt++;
	}
	// ��������o��
	echo $output;
}

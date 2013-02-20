<?php
//
//  Autofields plugin
//  (P) rafrica.net team, 2010
//  http://we.rafrica.net/
//

$config = array ();

$config ['Autofields_Process_For_IDs'] = array (
      // clear_far_parent ������ ������ ���� "false", ������ ��� ����� ������������ ����������� � "true"
      // clear_far_parent - ������ � ������� ���������!
      
      // ���� ����� ������ ������ �����������
      array ('object_ID' => 'form_comment_text',
             'min_height' => 100,
             'max_height' => 500,
             'clear_far_parent' => 'true'
            ),

      // ���� ����� ������ ������ ������
      array ('object_ID' => 'topic_text',
             'min_height' => 250,
             'max_height' => 500,
             'clear_far_parent' => 'false'
            ),
      
);

// --- ������ ������ ������ ��� ������������� ---

// ������ ����� ����� � ��������. ���������� ������� ����. �� ��������� 8 ��� ������ �������� 12px
$config ['One_Letter_Width_Px'] = 8;

// �������� ������ ����� � ����� � 3 �������, ������� �� ������ �������� 50 ��������
$config ['Change_Lines_Count'] = 3;       // �.�. 1 ������
$config ['Change_Lines_Height'] = 50;     // ��� 17 ��������

return $config;
?>
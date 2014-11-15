<h2>Edit Post</h2>

<?php
echo $this->Form->create('Post', array('action'=>'edit'));
echo $this->Form->input('title', array('required' => false));
echo $this->Form->input('body', array('rows' => 3));
echo $this->Form->end('UpdatePost');

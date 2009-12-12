<?php
/**
 * Class information element
 *
 */
echo $apiUtils->element('before_class_info');
?>
<a id="class-<?php echo $doc->name; ?>"></a>
<div class="doc-block class-info">
	<div class="doc-head"><h2><?php echo $doc->name; ?> Class Info:</h2></div>
	<div class="doc-body">
	  <dl>
		<dt><?php __('Class Declaration:'); ?></dt>
		<dd><?php echo $doc->classInfo['classDescription']; ?></dd>
		
		<dt><?php __('File name:'); ?></dt>
		<dd><?php echo $apiDoc->trimFileName($doc->classInfo['fileName']); ?></dd>
		
		<dt><?php __('Summary:'); ?></dt>
		<dd class="markdown-block"><?php echo h($doc->classInfo['comment']['description']); ?></dd>
		
		<?php if (!empty($doc->classInfo['parents'])): ?>
		<dt><?php __('Class Inheritance'); ?></dt>
		<dd><?php echo $apiDoc->inheritanceTree($doc->classInfo['parents']); ?></dd>
		<?php endif;?>
		
		<?php if (!empty($doc->classInfo['interfaces'])): ?>
		<dt><?php __('Interfaces Implemented'); ?></dt>
		<dd>
			<?php foreach ($doc->classInfo['interfaces'] as $interfaces): ?>
		        <?php echo $apiDoc->classLink($interfaces); ?>
			<?php endforeach; ?>
		</dd>
		<?php endif;?>
		
	  </dl>
	  <?php echo $this->element('tag_block', array('tags' => $doc->classInfo['comment']['tags'])); ?>
	</div>
</div>
<?php echo $apiUtils->element('after_class_info'); ?>
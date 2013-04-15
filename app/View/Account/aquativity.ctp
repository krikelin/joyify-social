<h1>My aquativities</h1>
<div class="aquativities">

<?php if(count($aquativities) < 1): ?>
You have no aquativities
<?php endif; ?>
<?php echo $this->element('aquativity-table', array('aquativities' => $aquativities));?>

</div>
<button class="btn btn-primary" onclick="self.location='<?php echo Router::Url('/aquativities/add')?>'">Register</button> 

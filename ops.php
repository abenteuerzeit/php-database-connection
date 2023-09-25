<?php
$data = $query->fetch(PDO::FETCH_ASSOC);
if ($data) {
  echo $data;
} else {
  echo "No results";
}
?>

<?php
$data = $query->fetch(PDO::FETCH_ASSOC);
if ($data) :
    echo $data;
else :
    echo "No results";
endif;
?>

<?php for ($i = 5; $i > 0; $i--) : ?>
    <div><?php echo $i ?></p>
<?php endfor; ?>
  
<?php
$foods = ['chocolate', 'ice cream', 'pizza'];
$x = 0;
while ($x < count($foods)) : ?>
  <div>I like <?php echo $foods[$x++] ?></div>
<?php endwhile; ?>

<?php
$foods = ['chocolate', 'ice cream', 'pizza'];
foreach ($foods as $food) : ?>
  <div>I like <?php echo $food ?></div>
<?php endforeach; ?>


<?php include 'data.php' ?>
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
    </tr>
    <?php foreach ($books as $book) : ?>
    <tr>
        <td><?php echo $book['title'] ?></td>
        <td><?php echo $book['author'] ?></td>
        <td><?php echo $book['year'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<!-- Set $var to 'Hello world' -->
<?php $var = 'Hello world'; ?>

<!-- Regular echo tag -->
<?php echo $var ?>
<!-- Displays: 'Hello world' -->

<!-- Short echo tag -->
<?= $var ?>
<!-- Displays: 'Hello world' -->


<!-- Is the 'cover_image' property empty? If it is use placeholder.jpg, otherwise use the cover_image. -->
<img src="<?= empty($book['cover_image']) ? 'placeholder.jpg' : $book['cover_image'] ?>" >

<?php 
// Is $book['cover_image'] set and not null? If it is return it, otherwise return 'placeholder.jpg'
$book['cover_image'] ?? 'placeholder.jpg';
?>

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
    </tr>
    <?php foreach ($books as $book) : ?>
    <tr>
        <td><?= $book['title'] ?></td>
        <td><?= $book['author'] ?? 'Unknown';?></td>
        <td><?= $book['year'] ?? 'Unknown'; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
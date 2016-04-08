<?php
$list = new SplDoublyLinkedList();
$list->push('(1)Apel');
$list->push('(2)Belimbing');
$list->push('(3)Ceri');

echo "<i>Memasukkan data urut <b>(1)Apel, (2)Belimbing, (3)Ceri</b> (LIFO):</i> <br><b>output:</b><br><----<i>head</i>----><br>";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
	for ($list->rewind(); $list->valid(); $list->next()) {
		echo $list->current()."<br>";
	}
	echo "<----<i>tail</i>---->";
echo "<br><br>";
	
$list->unshift('(4)Durian');

echo "<i>Memasukkan data <b>'(4)Durian'</b> ke head:</i> <br><b>output:</b><br><----<i>head</i>----><br>";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
	for ($list->rewind(); $list->valid(); $list->next()) {
		echo $list->current()."<br>";
	}
	echo "<----<i>tail</i>---->";	
echo "<br><br>";
	
$list->pop();

echo "<i>Menghilangkan data <b>'(3)Ceri'</b> dari tail:</i> <br><b>output:</b><br><----<i>head</i>----><br>";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
	for ($list->rewind(); $list->valid(); $list->next()) {
		echo $list->current()."<br>";
	}
	echo "<----<i>tail</i>---->";	
echo "<br><br>";
	
$list->shift();

echo "<i>Menghilangkan data <b>'(4)durian'</b> dari head:</i> <br><b>output:</b><br><----<i>head</i>----><br>";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
	for ($list->rewind(); $list->valid(); $list->next()) {
		echo $list->current()."<br>";
	}
	echo "<----<i>tail</i>---->";
echo "<br><br>";
	
$list->add(1, '(5)Jambu');
$list->add(2, '(6)Kedondong');


echo "<i>Menyisipkan data <b>'(5)jambu dan (6)Kedondong'</b> pada kolom urutan ke-2 dan ke-3:</i> <br><b>output:</b><br><----<i>head</i>----><br>";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
	for ($list->rewind(); $list->valid(); $list->next()) {
		echo $list->current()."<br>";
	}
	echo "<----<i>tail</i>---->";	
?>

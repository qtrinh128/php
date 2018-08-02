<?php
class SortStudent
{
	private function sortByName($a, $b) {
        // Sắp xếp theo alphabeta (theo họ)
        return strcmp($a['nameStudent'], $b['nameStudent']);
    }
    private function sortByDob($a, $b) {
        // Sắp xếp theo ngày cũ thì lên trước
        return (strtotime($a['birthDate']) > strtotime($b['birthDate']));
    }
}
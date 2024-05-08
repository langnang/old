<?php

/**
 * 
 */
class ArrayController
{
	
	function index()
	{
		$Array=array(
			"array()"=>"创建数组。","
			array_change_key_case()"=>"返回其键均为大写或小写的数组。","
			array_chunk()"=>"把一个数组分割为新的数组块。","
			array_column()"=>"返回输入数组中某个单一列的值。","
			array_combine()"=>"通过合并两个数组（一个为键名数组，一个为键值数组）来创建一个新数组。","
			array_count_values()"=>"用于统计数组中所有值出现的次数。","
			array_diff()"=>"比较数组，返回两个数组的差集（只比较键值）。","
			array_diff_assoc()"=>"比较数组，返回两个数组的差集（比较键名和键值）。","
			array_diff_key()"=>"比较数组，返回两个数组的差集（只比较键名）。","
			array_diff_uassoc()"=>"比较数组，返回两个数组的差集（比较键名和键值，使用用户自定义的键名比较函数）。","
			array_diff_ukey()"=>"比较数组，返回两个数组的差集（只比较键名，使用用户自定义的键名比较函数）。","
			array_fill()"=>"用给定的键值填充数组。","
			array_fill_keys()"=>"用给定的指定键名的键值填充数组。","
			array_filter()"=>"用回调函数过滤数组中的元素。","
			array_flip()"=>"反转/交换数组中的键名和对应关联的键值。","
			array_intersect()"=>"比较数组，返回两个数组的交集（只比较键值）。","
			array_intersect_assoc()"=>"比较数组，返回两个数组的交集（比较键名和键值）。","
			array_intersect_key()"=>"比较数组，返回两个数组的交集（只比较键名）。","
			array_intersect_uassoc()"=>"比较数组，返回两个数组的交集（比较键名和键值，使用用户自定义的键名比较函数）。","
			array_intersect_ukey()"=>"比较数组，返回两个数组的交集（只比较键名，使用用户自定义的键名比较函数）。","
			array_key_exists()"=>"检查指定的键名是否存在于数组中。","
			array_keys()"=>"返回数组中所有的键名。","
			array_map()"=>"将用户自定义函数作用到给定数组的每个值上，返回新的值。","
			array_merge()"=>"把一个或多个数组合并为一个数组。","
			array_merge_recursive()"=>"递归地把一个或多个数组合并为一个数组。","
			array_multisort()"=>"对多个数组或多维数组进行排序。","
			array_pad()"=>"将指定数量的带有指定值的元素插入到数组中。","
			array_pop()"=>"删除数组中的最后一个元素（出栈）。","
			array_product()"=>"计算数组中所有值的乘积。","
			array_push()"=>"将一个或多个元素插入数组的末尾（入栈）。","
			array_rand()"=>"从数组中随机选出一个或多个元素，返回键名。","
			array_reduce()"=>"通过使用用户自定义函数，迭代地将数组简化为一个字符串，并返回。","
			array_replace()"=>"使用后面数组的值替换第一个数组的值。","
			array_replace_recursive()"=>"递归地使用后面数组的值替换第一个数组的值。","
			array_reverse()"=>"将原数组中的元素顺序翻转，创建新的数组并返回。","
			array_search()"=>"在数组中搜索给定的值，如果成功则返回相应的键名。","
			array_shift()"=>"删除数组中的第一个元素，并返回被删除元素的值。","
			array_slice()"=>"返回数组中的选定部分。","
			array_splice()"=>"把数组中的指定元素去掉并用其它值取代。","
			array_sum()"=>"返回数组中所有值的和。","
			array_udiff()"=>"比较数组，返回两个数组的差集（只比较键值，使用一个用户自定义的键名比较函数）。","
			array_udiff_assoc()"=>"比较数组，返回两个数组的差集（比较键名和键值，使用内建函数比较键名，使用用户自定义函数比较键值）。","
			array_udiff_uassoc()"=>"比较数组，返回两个数组的差集（比较键名和键值，使用两个用户自定义的键名比较函数）。","
			array_uintersect()"=>"比较数组，返回两个数组的交集（只比较键值，使用一个用户自定义的键名比较函数）。","
			array_uintersect_assoc()"=>"比较数组，返回两个数组的交集（比较键名和键值，使用内建函数比较键名，使用用户自定义函数比较键值）。","
			array_uintersect_uassoc()"=>"比较数组，返回两个数组的交集（比较键名和键值，使用两个用户自定义的键名比较函数）。","
			array_unique()"=>"删除数组中重复的值。","
			array_unshift()"=>"在数组开头插入一个或多个元素。","
			array_values()"=>"返回数组中所有的值。","
			array_walk()"=>"对数组中的每个成员应用用户函数。","
			array_walk_recursive()"=>"对数组中的每个成员递归地应用用户函数。","
			arsort()"=>"对关联数组按照键值进行降序排序。","
			asort()"=>"对关联数组按照键值进行升序排序。","
			compact()"=>"创建一个包含变量名和它们的值的数组。","
			count()"=>"返回数组中元素的数目。","
			current()"=>"返回数组中的当前元素。","
			each()"=>"返回数组中当前的键／值对。","
			end()"=>"将数组的内部指针指向最后一个元素。","
			extract()"=>"从数组中将变量导入到当前的符号表。","
			in_array()"=>"检查数组中是否存在指定的值。","
			key()"=>"从关联数组中取得键名。","
			krsort()"=>"对关联数组按照键名降序排序。","
			ksort()"=>"对关联数组按照键名升序排序。","
			list()"=>"把数组中的值赋给一些数组变量。","
			natcasesort()"=>"用\"自然排序\"算法对数组进行不区分大小写字母的排序。","
			natsort()"=>"用\"自然排序\"算法对数组排序。","
			next()"=>"将数组中的内部指针向前移动一位。","
			pos()"=>"current()"=>"的别名。","
			prev()"=>"将数组的内部指针倒回一位。","
			range()"=>"创建一个包含指定范围的元素的数组。","
			reset()"=>"将数组的内部指针指向第一个元素。","
			rsort()"=>"对数值数组进行降序排序。","
			shuffle()"=>"把数组中的元素按随机顺序重新排列。","
			sizeof()"=>"count()"=>"的别名。","
			sort()"=>"对数值数组进行升序排序。","
			uasort()"=>"使用用户自定义的比较函数对数组中的键值进行排序。","
			uksort()"=>"使用用户自定义的比较函数对数组中的键名进行排序。","
			usort()"=>"使用用户自定义的比较函数对数组进行排序。"
		)
	}
}
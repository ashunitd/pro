<?php
$config = [
'seller_info'		=>		[

										[
										'field'=>'shopname',
										'label'=>'Shop Name',
										'rules'=>'required'
										],

									 	[
										'field'=>'shoplegalname',
										'label'=>'Legal Name of shop',
										'rules'=>'required'
										],

										[
										'field'=>'phonenumber',
										'label'=>'Phone Number',
										'rules'=>'required|numeric|exact_length[10]'
										],
										[
										'field'=>'email',
										'label'=>'Email',
										'rules'=>'required|is_unique[sellerinfo.email]'
										],
										[
										'field'=>'pincode',
										'label'=>'Pin Code',
										'rules'=>'required|exact_length[6]|numeric'
										],
										[
										'field'=>'address',
										'label'=>'Address',
										'rules'=>'required'
										],
										[
										'field'=>'panno',
										'label'=>'PAN number',
										'rules'=>'required|alpha_numeric'
										],
										[
										'field'=>'nameonpan',
										'label'=>'Name on PAN',
										'rules'=>'required'
										],
										[
										'field'=>'vatcstno',
										'label'=>'VAT or CST',
										'rules'=>'required'
										],
										[
										'field'=>'tinno',
										'label'=>'TIN Number',
										'rules'=>'required|numeric'
										]




                              ]
];
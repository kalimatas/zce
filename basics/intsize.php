<?php

/*
typedef struct _zval_struct {
    zvalue_value value;        // variable value      // 16
	zend_uint refcount__gc;    // reference counter   // 4
    zend_uchar type;           // value type          // 1
    zend_uchar is_ref__gc;     // reference flag	  // 1
} zval;
*/

/*
typedef union _zvalue_value {
    long lval;                 // long value
	double dval;               // double value
    struct {       // 16
		char *val; // 8
		int len;   // 4        // this will always be set for strings
    } str;                     // string (always has length)
    HashTable *ht;             // an array
    zend_object_value obj;     // stores an object store handle, and handlers
} zvalue_value;
*/

/*
typedef struct _gc_root_buffer {
	struct _gc_root_buffer   *prev;		//double-linked list
	struct _gc_root_buffer   *next;
	zend_object_handle        handle;	// must be 0 for zval
	union {
		zval                 *pz;
		const zend_object_handlers *handlers;
	} u;
} gc_root_buffer;
*/

/*
typedef struct _zval_gc_info {
	zval z;
	union {
		gc_root_buffer       *buffered;
		struct _zval_gc_info *next;
	} u;
} zval_gc_info;
*/

/*
char *  8
unsigned char 1
unsigned int 4
unsigned long 8
double 8
*/

echo memory_get_usage() . PHP_EOL;
$a = 255;
echo memory_get_usage() . PHP_EOL;

//debug_zval_dump($a);


echo PHP_EOL;

<?php

/*
typedef union _zvalue_value {  // 16, max from union
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
typedef struct _zval_struct {                         // 22 + alignment == 24
    zvalue_value value;        // variable value      // 16
	zend_uint refcount__gc;    // reference counter   // 4
    zend_uchar type;           // value type          // 1
    zend_uchar is_ref__gc;     // reference flag	  // 1
} zval;
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
typedef struct _zval_gc_info { // 8, pointer
	zval z;
	union {
		gc_root_buffer       *buffered;
		struct _zval_gc_info *next;
	} u;
} zval_gc_info;
*/

/*
typedef struct _zend_mm_block_info { // 16
#if ZEND_MM_COOKIES
    size_t _cookie;
#endif
    size_t _size; //contains allocation size // 8
    size_t _prev; //info on previous block   // 8
} zend_mm_block_info;
*/

// Sum: 48

echo memory_get_usage() . PHP_EOL;
$a = 255;
echo memory_get_usage() . PHP_EOL;

echo PHP_EOL;

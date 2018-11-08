<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/query.proto

namespace Google\Cloud\Firestore\V1beta1\StructuredQuery\FieldFilter;

/**
 * A field filter operator.
 *
 * Protobuf type <code>google.firestore.v1beta1.StructuredQuery.FieldFilter.Operator</code>
 */
class Operator
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * Less than. Requires that the field come first in `order_by`.
     *
     * Generated from protobuf enum <code>LESS_THAN = 1;</code>
     */
    const LESS_THAN = 1;
    /**
     * Less than or equal. Requires that the field come first in `order_by`.
     *
     * Generated from protobuf enum <code>LESS_THAN_OR_EQUAL = 2;</code>
     */
    const LESS_THAN_OR_EQUAL = 2;
    /**
     * Greater than. Requires that the field come first in `order_by`.
     *
     * Generated from protobuf enum <code>GREATER_THAN = 3;</code>
     */
    const GREATER_THAN = 3;
    /**
     * Greater than or equal. Requires that the field come first in
     * `order_by`.
     *
     * Generated from protobuf enum <code>GREATER_THAN_OR_EQUAL = 4;</code>
     */
    const GREATER_THAN_OR_EQUAL = 4;
    /**
     * Equal.
     *
     * Generated from protobuf enum <code>EQUAL = 5;</code>
     */
    const EQUAL = 5;
    /**
     * Contains. Requires that the field is an array.
     *
     * Generated from protobuf enum <code>ARRAY_CONTAINS = 7;</code>
     */
    const ARRAY_CONTAINS = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operator::class, \Google\Cloud\Firestore\V1beta1\StructuredQuery_FieldFilter_Operator::class);

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `AddProductToProductSet` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.AddProductToProductSetRequest</code>
 */
class AddProductToProductSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name for the ProductSet to modify.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The resource name for the Product to be added to this ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     *
     * Generated from protobuf field <code>string product = 2;</code>
     */
    private $product = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name for the ProductSet to modify.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *     @type string $product
     *           The resource name for the Product to be added to this ProductSet.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name for the ProductSet to modify.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name for the ProductSet to modify.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The resource name for the Product to be added to this ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     *
     * Generated from protobuf field <code>string product = 2;</code>
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * The resource name for the Product to be added to this ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     *
     * Generated from protobuf field <code>string product = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkString($var, True);
        $this->product = $var;

        return $this;
    }

}

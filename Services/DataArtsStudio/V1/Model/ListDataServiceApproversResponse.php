<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDataServiceApproversResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDataServiceApproversResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalRecords  总记录数
    * size  单页记录数
    * totalPages  总页数
    * approvers  审批人列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalRecords' => 'string',
            'size' => 'int',
            'totalPages' => 'int',
            'approvers' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApproverListApprovers[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalRecords  总记录数
    * size  单页记录数
    * totalPages  总页数
    * approvers  审批人列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalRecords' => null,
        'size' => 'int32',
        'totalPages' => 'int32',
        'approvers' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * totalRecords  总记录数
    * size  单页记录数
    * totalPages  总页数
    * approvers  审批人列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalRecords' => 'total_records',
            'size' => 'size',
            'totalPages' => 'total_pages',
            'approvers' => 'approvers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalRecords  总记录数
    * size  单页记录数
    * totalPages  总页数
    * approvers  审批人列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'totalRecords' => 'setTotalRecords',
            'size' => 'setSize',
            'totalPages' => 'setTotalPages',
            'approvers' => 'setApprovers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalRecords  总记录数
    * size  单页记录数
    * totalPages  总页数
    * approvers  审批人列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'totalRecords' => 'getTotalRecords',
            'size' => 'getSize',
            'totalPages' => 'getTotalPages',
            'approvers' => 'getApprovers'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['totalRecords'] = isset($data['totalRecords']) ? $data['totalRecords'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['totalPages'] = isset($data['totalPages']) ? $data['totalPages'] : null;
        $this->container['approvers'] = isset($data['approvers']) ? $data['approvers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets totalRecords
    *  总记录数
    *
    * @return string|null
    */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
    * Sets totalRecords
    *
    * @param string|null $totalRecords 总记录数
    *
    * @return $this
    */
    public function setTotalRecords($totalRecords)
    {
        $this->container['totalRecords'] = $totalRecords;
        return $this;
    }

    /**
    * Gets size
    *  单页记录数
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 单页记录数
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets totalPages
    *  总页数
    *
    * @return int|null
    */
    public function getTotalPages()
    {
        return $this->container['totalPages'];
    }

    /**
    * Sets totalPages
    *
    * @param int|null $totalPages 总页数
    *
    * @return $this
    */
    public function setTotalPages($totalPages)
    {
        $this->container['totalPages'] = $totalPages;
        return $this;
    }

    /**
    * Gets approvers
    *  审批人列表信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApproverListApprovers[]|null
    */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
    * Sets approvers
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApproverListApprovers[]|null $approvers 审批人列表信息
    *
    * @return $this
    */
    public function setApprovers($approvers)
    {
        $this->container['approvers'] = $approvers;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


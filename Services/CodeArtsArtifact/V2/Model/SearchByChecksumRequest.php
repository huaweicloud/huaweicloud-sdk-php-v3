<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchByChecksumRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchByChecksumRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checksum  checksum
    * pageNo  页码
    * pageSize  每页条数
    * format  仓库类型
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checksum' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'format' => 'string',
            'inProject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checksum  checksum
    * pageNo  页码
    * pageSize  每页条数
    * format  仓库类型
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checksum' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'format' => null,
        'inProject' => null
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
    * checksum  checksum
    * pageNo  页码
    * pageSize  每页条数
    * format  仓库类型
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checksum' => 'checksum',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'format' => 'format',
            'inProject' => 'in_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checksum  checksum
    * pageNo  页码
    * pageSize  每页条数
    * format  仓库类型
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $setters = [
            'checksum' => 'setChecksum',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'format' => 'setFormat',
            'inProject' => 'setInProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checksum  checksum
    * pageNo  页码
    * pageSize  每页条数
    * format  仓库类型
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $getters = [
            'checksum' => 'getChecksum',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'format' => 'getFormat',
            'inProject' => 'getInProject'
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
        $this->container['checksum'] = isset($data['checksum']) ? $data['checksum'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['inProject'] = isset($data['inProject']) ? $data['inProject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['checksum'] === null) {
            $invalidProperties[] = "'checksum' can't be null";
        }
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
    * Gets checksum
    *  checksum
    *
    * @return string
    */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
    * Sets checksum
    *
    * @param string $checksum checksum
    *
    * @return $this
    */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;
        return $this;
    }

    /**
    * Gets pageNo
    *  页码
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 页码
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets format
    *  仓库类型
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 仓库类型
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets inProject
    *  是否在项目中
    *
    * @return string|null
    */
    public function getInProject()
    {
        return $this->container['inProject'];
    }

    /**
    * Sets inProject
    *
    * @param string|null $inProject 是否在项目中
    *
    * @return $this
    */
    public function setInProject($inProject)
    {
        $this->container['inProject'] = $inProject;
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


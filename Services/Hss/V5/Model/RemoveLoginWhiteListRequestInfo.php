<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoveLoginWhiteListRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoveLoginWhiteListRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataList  删除登录白名单详情
    * deleteAll  是否删除所有白名单内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\LoginWhiteListRequestInfo[]',
            'deleteAll' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataList  删除登录白名单详情
    * deleteAll  是否删除所有白名单内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataList' => null,
        'deleteAll' => null
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
    * dataList  删除登录白名单详情
    * deleteAll  是否删除所有白名单内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataList' => 'data_list',
            'deleteAll' => 'delete_all'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataList  删除登录白名单详情
    * deleteAll  是否删除所有白名单内容
    *
    * @var string[]
    */
    protected static $setters = [
            'dataList' => 'setDataList',
            'deleteAll' => 'setDeleteAll'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataList  删除登录白名单详情
    * deleteAll  是否删除所有白名单内容
    *
    * @var string[]
    */
    protected static $getters = [
            'dataList' => 'getDataList',
            'deleteAll' => 'getDeleteAll'
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
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['deleteAll'] = isset($data['deleteAll']) ? $data['deleteAll'] : null;
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
    * Gets dataList
    *  删除登录白名单详情
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\LoginWhiteListRequestInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\LoginWhiteListRequestInfo[]|null $dataList 删除登录白名单详情
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets deleteAll
    *  是否删除所有白名单内容
    *
    * @return bool|null
    */
    public function getDeleteAll()
    {
        return $this->container['deleteAll'];
    }

    /**
    * Sets deleteAll
    *
    * @param bool|null $deleteAll 是否删除所有白名单内容
    *
    * @return $this
    */
    public function setDeleteAll($deleteAll)
    {
        $this->container['deleteAll'] = $deleteAll;
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


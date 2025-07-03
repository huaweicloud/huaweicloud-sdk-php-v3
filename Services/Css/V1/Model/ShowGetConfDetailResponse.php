<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGetConfDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGetConfDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  配置文件名称。
    * status  配置文件状态。
    * confContent  配置文件内容。
    * setting  setting
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'confContent' => 'string',
            'setting' => '\HuaweiCloud\SDK\Css\V1\Model\Confsetting',
            'updateAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  配置文件名称。
    * status  配置文件状态。
    * confContent  配置文件内容。
    * setting  setting
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'confContent' => null,
        'setting' => null,
        'updateAt' => null
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
    * name  配置文件名称。
    * status  配置文件状态。
    * confContent  配置文件内容。
    * setting  setting
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'confContent' => 'confContent',
            'setting' => 'setting',
            'updateAt' => 'updateAt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  配置文件名称。
    * status  配置文件状态。
    * confContent  配置文件内容。
    * setting  setting
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'confContent' => 'setConfContent',
            'setting' => 'setSetting',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  配置文件名称。
    * status  配置文件状态。
    * confContent  配置文件内容。
    * setting  setting
    * updateAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'confContent' => 'getConfContent',
            'setting' => 'getSetting',
            'updateAt' => 'getUpdateAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['confContent'] = isset($data['confContent']) ? $data['confContent'] : null;
        $this->container['setting'] = isset($data['setting']) ? $data['setting'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    * Gets name
    *  配置文件名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 配置文件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  配置文件状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 配置文件状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets confContent
    *  配置文件内容。
    *
    * @return string|null
    */
    public function getConfContent()
    {
        return $this->container['confContent'];
    }

    /**
    * Sets confContent
    *
    * @param string|null $confContent 配置文件内容。
    *
    * @return $this
    */
    public function setConfContent($confContent)
    {
        $this->container['confContent'] = $confContent;
        return $this;
    }

    /**
    * Gets setting
    *  setting
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\Confsetting|null
    */
    public function getSetting()
    {
        return $this->container['setting'];
    }

    /**
    * Sets setting
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\Confsetting|null $setting setting
    *
    * @return $this
    */
    public function setSetting($setting)
    {
        $this->container['setting'] = $setting;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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


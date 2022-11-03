<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIpGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIpGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  地址组id
    * name  地址组名称
    * ips  地址组ip（以逗号分隔的ip或ip段）
    * size  地址组长度
    * rules  ip地址组绑定的规则列表
    * shareInfo  shareInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'ips' => 'string',
            'size' => 'int',
            'rules' => '\HuaweiCloud\SDK\Waf\V1\Model\RuleInfo[]',
            'shareInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\ShareInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  地址组id
    * name  地址组名称
    * ips  地址组ip（以逗号分隔的ip或ip段）
    * size  地址组长度
    * rules  ip地址组绑定的规则列表
    * shareInfo  shareInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'ips' => null,
        'size' => null,
        'rules' => null,
        'shareInfo' => null
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
    * id  地址组id
    * name  地址组名称
    * ips  地址组ip（以逗号分隔的ip或ip段）
    * size  地址组长度
    * rules  ip地址组绑定的规则列表
    * shareInfo  shareInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'ips' => 'ips',
            'size' => 'size',
            'rules' => 'rules',
            'shareInfo' => 'share_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  地址组id
    * name  地址组名称
    * ips  地址组ip（以逗号分隔的ip或ip段）
    * size  地址组长度
    * rules  ip地址组绑定的规则列表
    * shareInfo  shareInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'ips' => 'setIps',
            'size' => 'setSize',
            'rules' => 'setRules',
            'shareInfo' => 'setShareInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  地址组id
    * name  地址组名称
    * ips  地址组ip（以逗号分隔的ip或ip段）
    * size  地址组长度
    * rules  ip地址组绑定的规则列表
    * shareInfo  shareInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'ips' => 'getIps',
            'size' => 'getSize',
            'rules' => 'getRules',
            'shareInfo' => 'getShareInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['shareInfo'] = isset($data['shareInfo']) ? $data['shareInfo'] : null;
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
    * Gets id
    *  地址组id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 地址组id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  地址组名称
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
    * @param string|null $name 地址组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ips
    *  地址组ip（以逗号分隔的ip或ip段）
    *
    * @return string|null
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param string|null $ips 地址组ip（以逗号分隔的ip或ip段）
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
        return $this;
    }

    /**
    * Gets size
    *  地址组长度
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
    * @param int|null $size 地址组长度
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets rules
    *  ip地址组绑定的规则列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\RuleInfo[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\RuleInfo[]|null $rules ip地址组绑定的规则列表
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets shareInfo
    *  shareInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ShareInfo|null
    */
    public function getShareInfo()
    {
        return $this->container['shareInfo'];
    }

    /**
    * Sets shareInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ShareInfo|null $shareInfo shareInfo
    *
    * @return $this
    */
    public function setShareInfo($shareInfo)
    {
        $this->container['shareInfo'] = $shareInfo;
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


<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsRuleChangeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsRuleChangeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipsIds  ips的id列表，Ips规则id，为必填参数，可通过[获取ips规则列表]( ListIpsRules.xml)查询获得，通过返回值中的data.records.ips_id（.表示各对象之间层级的区分）获得。
    * objectId  防护对象id
    * status  ips规则状态，包含观察：OBSERVE、拦截：ENABLE、禁用：CLOSE、恢复默认：DEFAULT、全局恢复默认：ALL_DEFAULT
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipsIds' => 'string[]',
            'objectId' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipsIds  ips的id列表，Ips规则id，为必填参数，可通过[获取ips规则列表]( ListIpsRules.xml)查询获得，通过返回值中的data.records.ips_id（.表示各对象之间层级的区分）获得。
    * objectId  防护对象id
    * status  ips规则状态，包含观察：OBSERVE、拦截：ENABLE、禁用：CLOSE、恢复默认：DEFAULT、全局恢复默认：ALL_DEFAULT
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipsIds' => null,
        'objectId' => null,
        'status' => null
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
    * ipsIds  ips的id列表，Ips规则id，为必填参数，可通过[获取ips规则列表]( ListIpsRules.xml)查询获得，通过返回值中的data.records.ips_id（.表示各对象之间层级的区分）获得。
    * objectId  防护对象id
    * status  ips规则状态，包含观察：OBSERVE、拦截：ENABLE、禁用：CLOSE、恢复默认：DEFAULT、全局恢复默认：ALL_DEFAULT
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipsIds' => 'ips_ids',
            'objectId' => 'object_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipsIds  ips的id列表，Ips规则id，为必填参数，可通过[获取ips规则列表]( ListIpsRules.xml)查询获得，通过返回值中的data.records.ips_id（.表示各对象之间层级的区分）获得。
    * objectId  防护对象id
    * status  ips规则状态，包含观察：OBSERVE、拦截：ENABLE、禁用：CLOSE、恢复默认：DEFAULT、全局恢复默认：ALL_DEFAULT
    *
    * @var string[]
    */
    protected static $setters = [
            'ipsIds' => 'setIpsIds',
            'objectId' => 'setObjectId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipsIds  ips的id列表，Ips规则id，为必填参数，可通过[获取ips规则列表]( ListIpsRules.xml)查询获得，通过返回值中的data.records.ips_id（.表示各对象之间层级的区分）获得。
    * objectId  防护对象id
    * status  ips规则状态，包含观察：OBSERVE、拦截：ENABLE、禁用：CLOSE、恢复默认：DEFAULT、全局恢复默认：ALL_DEFAULT
    *
    * @var string[]
    */
    protected static $getters = [
            'ipsIds' => 'getIpsIds',
            'objectId' => 'getObjectId',
            'status' => 'getStatus'
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
    const STATUS_OBSERVE = 'OBSERVE';
    const STATUS_ENABLE = 'ENABLE';
    const STATUS_CLOSE = 'CLOSE';
    const STATUS__DEFAULT = 'DEFAULT';
    const STATUS_ALL_DEFAULT = 'ALL_DEFAULT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OBSERVE,
            self::STATUS_ENABLE,
            self::STATUS_CLOSE,
            self::STATUS__DEFAULT,
            self::STATUS_ALL_DEFAULT,
        ];
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
        $this->container['ipsIds'] = isset($data['ipsIds']) ? $data['ipsIds'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets ipsIds
    *  ips的id列表，Ips规则id，为必填参数，可通过[获取ips规则列表]( ListIpsRules.xml)查询获得，通过返回值中的data.records.ips_id（.表示各对象之间层级的区分）获得。
    *
    * @return string[]|null
    */
    public function getIpsIds()
    {
        return $this->container['ipsIds'];
    }

    /**
    * Sets ipsIds
    *
    * @param string[]|null $ipsIds ips的id列表，Ips规则id，为必填参数，可通过[获取ips规则列表]( ListIpsRules.xml)查询获得，通过返回值中的data.records.ips_id（.表示各对象之间层级的区分）获得。
    *
    * @return $this
    */
    public function setIpsIds($ipsIds)
    {
        $this->container['ipsIds'] = $ipsIds;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象id
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 防护对象id
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets status
    *  ips规则状态，包含观察：OBSERVE、拦截：ENABLE、禁用：CLOSE、恢复默认：DEFAULT、全局恢复默认：ALL_DEFAULT
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
    * @param string|null $status ips规则状态，包含观察：OBSERVE、拦截：ENABLE、禁用：CLOSE、恢复默认：DEFAULT、全局恢复默认：ALL_DEFAULT
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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


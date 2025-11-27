<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchWebTamperProtectStatusRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchWebTamperProtectStatusRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  防护类型
    * operateType  操作类型：（open 开启防护,close 关闭防护）
    * chargingMode  计费模式，开启防护时需要，容器网页防篡改固定传packet_cycle
    * protectionConfigIdList  操作的防护配置id列表
    * resourceIdList  配额id列表，开启防护时需要（若开启防护时不传该列表，则随机绑定配额）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'operateType' => 'string',
            'chargingMode' => 'string',
            'protectionConfigIdList' => 'string[]',
            'resourceIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  防护类型
    * operateType  操作类型：（open 开启防护,close 关闭防护）
    * chargingMode  计费模式，开启防护时需要，容器网页防篡改固定传packet_cycle
    * protectionConfigIdList  操作的防护配置id列表
    * resourceIdList  配额id列表，开启防护时需要（若开启防护时不传该列表，则随机绑定配额）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'operateType' => null,
        'chargingMode' => null,
        'protectionConfigIdList' => null,
        'resourceIdList' => null
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
    * type  防护类型
    * operateType  操作类型：（open 开启防护,close 关闭防护）
    * chargingMode  计费模式，开启防护时需要，容器网页防篡改固定传packet_cycle
    * protectionConfigIdList  操作的防护配置id列表
    * resourceIdList  配额id列表，开启防护时需要（若开启防护时不传该列表，则随机绑定配额）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'operateType' => 'operate_type',
            'chargingMode' => 'charging_mode',
            'protectionConfigIdList' => 'protection_config_id_list',
            'resourceIdList' => 'resource_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  防护类型
    * operateType  操作类型：（open 开启防护,close 关闭防护）
    * chargingMode  计费模式，开启防护时需要，容器网页防篡改固定传packet_cycle
    * protectionConfigIdList  操作的防护配置id列表
    * resourceIdList  配额id列表，开启防护时需要（若开启防护时不传该列表，则随机绑定配额）
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'operateType' => 'setOperateType',
            'chargingMode' => 'setChargingMode',
            'protectionConfigIdList' => 'setProtectionConfigIdList',
            'resourceIdList' => 'setResourceIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  防护类型
    * operateType  操作类型：（open 开启防护,close 关闭防护）
    * chargingMode  计费模式，开启防护时需要，容器网页防篡改固定传packet_cycle
    * protectionConfigIdList  操作的防护配置id列表
    * resourceIdList  配额id列表，开启防护时需要（若开启防护时不传该列表，则随机绑定配额）
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'operateType' => 'getOperateType',
            'chargingMode' => 'getChargingMode',
            'protectionConfigIdList' => 'getProtectionConfigIdList',
            'resourceIdList' => 'getResourceIdList'
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
    const TYPE_CONTAINER_WTP = 'container_wtp';
    const OPERATE_TYPE_CLOSE = 'close';
    const OPERATE_TYPE_OPEN = 'open';
    const CHARGING_MODE_PACKET_CYCLE = 'packet_cycle';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CONTAINER_WTP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateTypeAllowableValues()
    {
        return [
            self::OPERATE_TYPE_CLOSE,
            self::OPERATE_TYPE_OPEN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PACKET_CYCLE,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['protectionConfigIdList'] = isset($data['protectionConfigIdList']) ? $data['protectionConfigIdList'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(container_wtp)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(container_wtp)$/.";
            }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
            $allowedValues = $this->getOperateTypeAllowableValues();
                if (!is_null($this->container['operateType']) && !in_array($this->container['operateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['operateType']) > 64)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['operateType']) < 0)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(open|close)$/", $this->container['operateType'])) {
                $invalidProperties[] = "invalid value for 'operateType', must be conform to the pattern /^(open|close)$/.";
            }
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['chargingMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['chargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(packet_cycle)$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^(packet_cycle)$/.";
            }
        if ($this->container['protectionConfigIdList'] === null) {
            $invalidProperties[] = "'protectionConfigIdList' can't be null";
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
    * Gets type
    *  防护类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 防护类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets operateType
    *  操作类型：（open 开启防护,close 关闭防护）
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 操作类型：（open 开启防护,close 关闭防护）
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式，开启防护时需要，容器网页防篡改固定传packet_cycle
    *
    * @return string
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string $chargingMode 计费模式，开启防护时需要，容器网页防篡改固定传packet_cycle
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets protectionConfigIdList
    *  操作的防护配置id列表
    *
    * @return string[]
    */
    public function getProtectionConfigIdList()
    {
        return $this->container['protectionConfigIdList'];
    }

    /**
    * Sets protectionConfigIdList
    *
    * @param string[] $protectionConfigIdList 操作的防护配置id列表
    *
    * @return $this
    */
    public function setProtectionConfigIdList($protectionConfigIdList)
    {
        $this->container['protectionConfigIdList'] = $protectionConfigIdList;
        return $this;
    }

    /**
    * Gets resourceIdList
    *  配额id列表，开启防护时需要（若开启防护时不传该列表，则随机绑定配额）
    *
    * @return string[]|null
    */
    public function getResourceIdList()
    {
        return $this->container['resourceIdList'];
    }

    /**
    * Sets resourceIdList
    *
    * @param string[]|null $resourceIdList 配额id列表，开启防护时需要（若开启防护时不传该列表，则随机绑定配额）
    *
    * @return $this
    */
    public function setResourceIdList($resourceIdList)
    {
        $this->container['resourceIdList'] = $resourceIdList;
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


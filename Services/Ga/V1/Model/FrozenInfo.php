<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrozenInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrozenInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  云服务或资源实例状态，取值： - 0：解冻/正常（云服务恢复正常）。 - 1：冻结（资源和数据会保留，但租户无法再正常使用云服务）。 - 2：删除/终止（资源和数据将清除）。
    * effect  在冻结/解冻操作下，取值： - 1（默认值）：冻结可释放。 - 2：冻结不可释放。 - 3：冻结后不可续费。
    * scene  更新云服务状态的业务场景列表，取值： - ARREAR（默认值）：欠费场景。为正常的运营业务场景，包括包周期资源到期、按需资源扣费失败。 - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'int',
            'effect' => 'int',
            'scene' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  云服务或资源实例状态，取值： - 0：解冻/正常（云服务恢复正常）。 - 1：冻结（资源和数据会保留，但租户无法再正常使用云服务）。 - 2：删除/终止（资源和数据将清除）。
    * effect  在冻结/解冻操作下，取值： - 1（默认值）：冻结可释放。 - 2：冻结不可释放。 - 3：冻结后不可续费。
    * scene  更新云服务状态的业务场景列表，取值： - ARREAR（默认值）：欠费场景。为正常的运营业务场景，包括包周期资源到期、按需资源扣费失败。 - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => 'int32',
        'effect' => 'int32',
        'scene' => null
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
    * status  云服务或资源实例状态，取值： - 0：解冻/正常（云服务恢复正常）。 - 1：冻结（资源和数据会保留，但租户无法再正常使用云服务）。 - 2：删除/终止（资源和数据将清除）。
    * effect  在冻结/解冻操作下，取值： - 1（默认值）：冻结可释放。 - 2：冻结不可释放。 - 3：冻结后不可续费。
    * scene  更新云服务状态的业务场景列表，取值： - ARREAR（默认值）：欠费场景。为正常的运营业务场景，包括包周期资源到期、按需资源扣费失败。 - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'effect' => 'effect',
            'scene' => 'scene'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  云服务或资源实例状态，取值： - 0：解冻/正常（云服务恢复正常）。 - 1：冻结（资源和数据会保留，但租户无法再正常使用云服务）。 - 2：删除/终止（资源和数据将清除）。
    * effect  在冻结/解冻操作下，取值： - 1（默认值）：冻结可释放。 - 2：冻结不可释放。 - 3：冻结后不可续费。
    * scene  更新云服务状态的业务场景列表，取值： - ARREAR（默认值）：欠费场景。为正常的运营业务场景，包括包周期资源到期、按需资源扣费失败。 - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'effect' => 'setEffect',
            'scene' => 'setScene'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  云服务或资源实例状态，取值： - 0：解冻/正常（云服务恢复正常）。 - 1：冻结（资源和数据会保留，但租户无法再正常使用云服务）。 - 2：删除/终止（资源和数据将清除）。
    * effect  在冻结/解冻操作下，取值： - 1（默认值）：冻结可释放。 - 2：冻结不可释放。 - 3：冻结后不可续费。
    * scene  更新云服务状态的业务场景列表，取值： - ARREAR（默认值）：欠费场景。为正常的运营业务场景，包括包周期资源到期、按需资源扣费失败。 - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'effect' => 'getEffect',
            'scene' => 'getScene'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : 1;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && ($this->container['status'] > 2)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effect']) && ($this->container['effect'] > 3)) {
                $invalidProperties[] = "invalid value for 'effect', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['effect']) && ($this->container['effect'] < 1)) {
                $invalidProperties[] = "invalid value for 'effect', must be bigger than or equal to 1.";
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
    * Gets status
    *  云服务或资源实例状态，取值： - 0：解冻/正常（云服务恢复正常）。 - 1：冻结（资源和数据会保留，但租户无法再正常使用云服务）。 - 2：删除/终止（资源和数据将清除）。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 云服务或资源实例状态，取值： - 0：解冻/正常（云服务恢复正常）。 - 1：冻结（资源和数据会保留，但租户无法再正常使用云服务）。 - 2：删除/终止（资源和数据将清除）。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets effect
    *  在冻结/解冻操作下，取值： - 1（默认值）：冻结可释放。 - 2：冻结不可释放。 - 3：冻结后不可续费。
    *
    * @return int|null
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param int|null $effect 在冻结/解冻操作下，取值： - 1（默认值）：冻结可释放。 - 2：冻结不可释放。 - 3：冻结后不可续费。
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets scene
    *  更新云服务状态的业务场景列表，取值： - ARREAR（默认值）：欠费场景。为正常的运营业务场景，包括包周期资源到期、按需资源扣费失败。 - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。
    *
    * @return string[]|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string[]|null $scene 更新云服务状态的业务场景列表，取值： - ARREAR（默认值）：欠费场景。为正常的运营业务场景，包括包周期资源到期、按需资源扣费失败。 - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
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


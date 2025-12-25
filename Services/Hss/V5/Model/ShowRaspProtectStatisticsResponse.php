<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRaspProtectStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRaspProtectStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectHostNum  **参数解释** 当前项目（或指定企业项目）下已添加应用防护的云服务器总数，统计范围为所有已启用RASP防护的主机 **取值范围** 取值0-为该项目下云服务器总数量（无上限，实际受账号资源配额限制）
    * antiTamperingNum  **参数解释** 近7天内当前项目（或指定企业项目）下RASP防护成功拦截的篡改类攻击总数，与功能介绍中'近七天微服务RASP攻击数量'对应 **取值范围** 取值0-无上限（实际受攻击频次限制）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectHostNum' => 'int',
            'antiTamperingNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectHostNum  **参数解释** 当前项目（或指定企业项目）下已添加应用防护的云服务器总数，统计范围为所有已启用RASP防护的主机 **取值范围** 取值0-为该项目下云服务器总数量（无上限，实际受账号资源配额限制）
    * antiTamperingNum  **参数解释** 近7天内当前项目（或指定企业项目）下RASP防护成功拦截的篡改类攻击总数，与功能介绍中'近七天微服务RASP攻击数量'对应 **取值范围** 取值0-无上限（实际受攻击频次限制）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectHostNum' => 'int64',
        'antiTamperingNum' => null
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
    * protectHostNum  **参数解释** 当前项目（或指定企业项目）下已添加应用防护的云服务器总数，统计范围为所有已启用RASP防护的主机 **取值范围** 取值0-为该项目下云服务器总数量（无上限，实际受账号资源配额限制）
    * antiTamperingNum  **参数解释** 近7天内当前项目（或指定企业项目）下RASP防护成功拦截的篡改类攻击总数，与功能介绍中'近七天微服务RASP攻击数量'对应 **取值范围** 取值0-无上限（实际受攻击频次限制）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectHostNum' => 'protect_host_num',
            'antiTamperingNum' => 'anti_tampering_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectHostNum  **参数解释** 当前项目（或指定企业项目）下已添加应用防护的云服务器总数，统计范围为所有已启用RASP防护的主机 **取值范围** 取值0-为该项目下云服务器总数量（无上限，实际受账号资源配额限制）
    * antiTamperingNum  **参数解释** 近7天内当前项目（或指定企业项目）下RASP防护成功拦截的篡改类攻击总数，与功能介绍中'近七天微服务RASP攻击数量'对应 **取值范围** 取值0-无上限（实际受攻击频次限制）
    *
    * @var string[]
    */
    protected static $setters = [
            'protectHostNum' => 'setProtectHostNum',
            'antiTamperingNum' => 'setAntiTamperingNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectHostNum  **参数解释** 当前项目（或指定企业项目）下已添加应用防护的云服务器总数，统计范围为所有已启用RASP防护的主机 **取值范围** 取值0-为该项目下云服务器总数量（无上限，实际受账号资源配额限制）
    * antiTamperingNum  **参数解释** 近7天内当前项目（或指定企业项目）下RASP防护成功拦截的篡改类攻击总数，与功能介绍中'近七天微服务RASP攻击数量'对应 **取值范围** 取值0-无上限（实际受攻击频次限制）
    *
    * @var string[]
    */
    protected static $getters = [
            'protectHostNum' => 'getProtectHostNum',
            'antiTamperingNum' => 'getAntiTamperingNum'
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
        $this->container['protectHostNum'] = isset($data['protectHostNum']) ? $data['protectHostNum'] : null;
        $this->container['antiTamperingNum'] = isset($data['antiTamperingNum']) ? $data['antiTamperingNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protectHostNum']) && ($this->container['protectHostNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'protectHostNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['protectHostNum']) && ($this->container['protectHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['antiTamperingNum']) && ($this->container['antiTamperingNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'antiTamperingNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['antiTamperingNum']) && ($this->container['antiTamperingNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'antiTamperingNum', must be bigger than or equal to 0.";
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
    * Gets protectHostNum
    *  **参数解释** 当前项目（或指定企业项目）下已添加应用防护的云服务器总数，统计范围为所有已启用RASP防护的主机 **取值范围** 取值0-为该项目下云服务器总数量（无上限，实际受账号资源配额限制）
    *
    * @return int|null
    */
    public function getProtectHostNum()
    {
        return $this->container['protectHostNum'];
    }

    /**
    * Sets protectHostNum
    *
    * @param int|null $protectHostNum **参数解释** 当前项目（或指定企业项目）下已添加应用防护的云服务器总数，统计范围为所有已启用RASP防护的主机 **取值范围** 取值0-为该项目下云服务器总数量（无上限，实际受账号资源配额限制）
    *
    * @return $this
    */
    public function setProtectHostNum($protectHostNum)
    {
        $this->container['protectHostNum'] = $protectHostNum;
        return $this;
    }

    /**
    * Gets antiTamperingNum
    *  **参数解释** 近7天内当前项目（或指定企业项目）下RASP防护成功拦截的篡改类攻击总数，与功能介绍中'近七天微服务RASP攻击数量'对应 **取值范围** 取值0-无上限（实际受攻击频次限制）
    *
    * @return int|null
    */
    public function getAntiTamperingNum()
    {
        return $this->container['antiTamperingNum'];
    }

    /**
    * Sets antiTamperingNum
    *
    * @param int|null $antiTamperingNum **参数解释** 近7天内当前项目（或指定企业项目）下RASP防护成功拦截的篡改类攻击总数，与功能介绍中'近七天微服务RASP攻击数量'对应 **取值范围** 取值0-无上限（实际受攻击频次限制）
    *
    * @return $this
    */
    public function setAntiTamperingNum($antiTamperingNum)
    {
        $this->container['antiTamperingNum'] = $antiTamperingNum;
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


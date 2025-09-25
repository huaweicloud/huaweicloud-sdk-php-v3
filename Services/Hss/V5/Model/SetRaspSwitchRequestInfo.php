<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetRaspSwitchRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetRaspSwitchRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIdList  **参数解释**: 服务器ID列表，仅支持Linux服务器，要求服务器已开启网页防篡改防护。 **约束限制**: 需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，os_type 等于 Linux 的 host_id 是符合修改条件的服务器ID。 **取值范围**: 最少1条，最多200条 **默认取值**: 不涉及
    * status  **参数解释**: 动态网页防篡改开启状态，仅支持Linux服务器。 **约束限制**: 不涉及 **取值范围**: - True ：开启动态网页防篡改。 - False ：关闭动态网页防篡改。  **默认取值**: False
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIdList' => 'string[]',
            'status' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIdList  **参数解释**: 服务器ID列表，仅支持Linux服务器，要求服务器已开启网页防篡改防护。 **约束限制**: 需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，os_type 等于 Linux 的 host_id 是符合修改条件的服务器ID。 **取值范围**: 最少1条，最多200条 **默认取值**: 不涉及
    * status  **参数解释**: 动态网页防篡改开启状态，仅支持Linux服务器。 **约束限制**: 不涉及 **取值范围**: - True ：开启动态网页防篡改。 - False ：关闭动态网页防篡改。  **默认取值**: False
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIdList' => null,
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
    * hostIdList  **参数解释**: 服务器ID列表，仅支持Linux服务器，要求服务器已开启网页防篡改防护。 **约束限制**: 需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，os_type 等于 Linux 的 host_id 是符合修改条件的服务器ID。 **取值范围**: 最少1条，最多200条 **默认取值**: 不涉及
    * status  **参数解释**: 动态网页防篡改开启状态，仅支持Linux服务器。 **约束限制**: 不涉及 **取值范围**: - True ：开启动态网页防篡改。 - False ：关闭动态网页防篡改。  **默认取值**: False
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIdList' => 'host_id_list',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIdList  **参数解释**: 服务器ID列表，仅支持Linux服务器，要求服务器已开启网页防篡改防护。 **约束限制**: 需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，os_type 等于 Linux 的 host_id 是符合修改条件的服务器ID。 **取值范围**: 最少1条，最多200条 **默认取值**: 不涉及
    * status  **参数解释**: 动态网页防篡改开启状态，仅支持Linux服务器。 **约束限制**: 不涉及 **取值范围**: - True ：开启动态网页防篡改。 - False ：关闭动态网页防篡改。  **默认取值**: False
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIdList' => 'setHostIdList',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIdList  **参数解释**: 服务器ID列表，仅支持Linux服务器，要求服务器已开启网页防篡改防护。 **约束限制**: 需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，os_type 等于 Linux 的 host_id 是符合修改条件的服务器ID。 **取值范围**: 最少1条，最多200条 **默认取值**: 不涉及
    * status  **参数解释**: 动态网页防篡改开启状态，仅支持Linux服务器。 **约束限制**: 不涉及 **取值范围**: - True ：开启动态网页防篡改。 - False ：关闭动态网页防篡改。  **默认取值**: False
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIdList' => 'getHostIdList',
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
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
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
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets hostIdList
    *  **参数解释**: 服务器ID列表，仅支持Linux服务器，要求服务器已开启网页防篡改防护。 **约束限制**: 需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，os_type 等于 Linux 的 host_id 是符合修改条件的服务器ID。 **取值范围**: 最少1条，最多200条 **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList **参数解释**: 服务器ID列表，仅支持Linux服务器，要求服务器已开启网页防篡改防护。 **约束限制**: 需要使用 ListWtpProtectHost 接口查询网页防篡改主机防护状态列表信息，在 ListWtpProtectHost 接口的响应体中，os_type 等于 Linux 的 host_id 是符合修改条件的服务器ID。 **取值范围**: 最少1条，最多200条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 动态网页防篡改开启状态，仅支持Linux服务器。 **约束限制**: 不涉及 **取值范围**: - True ：开启动态网页防篡改。 - False ：关闭动态网页防篡改。  **默认取值**: False
    *
    * @return bool
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool $status **参数解释**: 动态网页防篡改开启状态，仅支持Linux服务器。 **约束限制**: 不涉及 **取值范围**: - True ：开启动态网页防篡改。 - False ：关闭动态网页防篡改。  **默认取值**: False
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


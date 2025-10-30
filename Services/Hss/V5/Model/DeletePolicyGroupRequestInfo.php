<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeletePolicyGroupRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeletePolicyGroupRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idList  **参数解释**: 需要被删除的策略组ID列表，仅支持删除非默认并且未关联服务器的策略组 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，deletable 等于 true 的 group_id 是可以被删除的策略组ID **取值范围**: 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idList  **参数解释**: 需要被删除的策略组ID列表，仅支持删除非默认并且未关联服务器的策略组 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，deletable 等于 true 的 group_id 是可以被删除的策略组ID **取值范围**: 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idList' => null
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
    * idList  **参数解释**: 需要被删除的策略组ID列表，仅支持删除非默认并且未关联服务器的策略组 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，deletable 等于 true 的 group_id 是可以被删除的策略组ID **取值范围**: 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idList' => 'id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idList  **参数解释**: 需要被删除的策略组ID列表，仅支持删除非默认并且未关联服务器的策略组 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，deletable 等于 true 的 group_id 是可以被删除的策略组ID **取值范围**: 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'idList' => 'setIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idList  **参数解释**: 需要被删除的策略组ID列表，仅支持删除非默认并且未关联服务器的策略组 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，deletable 等于 true 的 group_id 是可以被删除的策略组ID **取值范围**: 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'idList' => 'getIdList'
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
        $this->container['idList'] = isset($data['idList']) ? $data['idList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['idList'] === null) {
            $invalidProperties[] = "'idList' can't be null";
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
    * Gets idList
    *  **参数解释**: 需要被删除的策略组ID列表，仅支持删除非默认并且未关联服务器的策略组 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，deletable 等于 true 的 group_id 是可以被删除的策略组ID **取值范围**: 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getIdList()
    {
        return $this->container['idList'];
    }

    /**
    * Sets idList
    *
    * @param string[] $idList **参数解释**: 需要被删除的策略组ID列表，仅支持删除非默认并且未关联服务器的策略组 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，deletable 等于 true 的 group_id 是可以被删除的策略组ID **取值范围**: 最少1条，最多50条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setIdList($idList)
    {
        $this->container['idList'] = $idList;
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


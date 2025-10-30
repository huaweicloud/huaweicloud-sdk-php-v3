<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateHostsGroupRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateHostsGroupRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 列表长度1-200条 **默认取值**： 不涉及
    * operateAll  **参数解释**: 是否要对全量主机分配到组，如果为true的话，将所有主机分配到组，不需填写host_id_list，如果为false的话，需要填写host_id_list **约束限制**: 不涉及 **取值范围**: - true: 将所有主机分配到组，不需填写host_id_list。 - false: 非全量分配到组，仅对指定的主机列表分配到组，需要填写host_id_list。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'hostIdList' => 'string[]',
            'operateAll' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 列表长度1-200条 **默认取值**： 不涉及
    * operateAll  **参数解释**: 是否要对全量主机分配到组，如果为true的话，将所有主机分配到组，不需填写host_id_list，如果为false的话，需要填写host_id_list **约束限制**: 不涉及 **取值范围**: - true: 将所有主机分配到组，不需填写host_id_list。 - false: 非全量分配到组，仅对指定的主机列表分配到组，需要填写host_id_list。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'hostIdList' => null,
        'operateAll' => null
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
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 列表长度1-200条 **默认取值**： 不涉及
    * operateAll  **参数解释**: 是否要对全量主机分配到组，如果为true的话，将所有主机分配到组，不需填写host_id_list，如果为false的话，需要填写host_id_list **约束限制**: 不涉及 **取值范围**: - true: 将所有主机分配到组，不需填写host_id_list。 - false: 非全量分配到组，仅对指定的主机列表分配到组，需要填写host_id_list。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'hostIdList' => 'host_id_list',
            'operateAll' => 'operate_all'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 列表长度1-200条 **默认取值**： 不涉及
    * operateAll  **参数解释**: 是否要对全量主机分配到组，如果为true的话，将所有主机分配到组，不需填写host_id_list，如果为false的话，需要填写host_id_list **约束限制**: 不涉及 **取值范围**: - true: 将所有主机分配到组，不需填写host_id_list。 - false: 非全量分配到组，仅对指定的主机列表分配到组，需要填写host_id_list。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'hostIdList' => 'setHostIdList',
            'operateAll' => 'setOperateAll'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * hostIdList  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 列表长度1-200条 **默认取值**： 不涉及
    * operateAll  **参数解释**: 是否要对全量主机分配到组，如果为true的话，将所有主机分配到组，不需填写host_id_list，如果为false的话，需要填写host_id_list **约束限制**: 不涉及 **取值范围**: - true: 将所有主机分配到组，不需填写host_id_list。 - false: 非全量分配到组，仅对指定的主机列表分配到组，需要填写host_id_list。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'hostIdList' => 'getHostIdList',
            'operateAll' => 'getOperateAll'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['operateAll'] === null) {
            $invalidProperties[] = "'operateAll' can't be null";
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
    * Gets groupId
    *  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 列表长度1-200条 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**： 服务器ID列表 **约束限制**： 不涉及 **取值范围**： 列表长度1-200条 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets operateAll
    *  **参数解释**: 是否要对全量主机分配到组，如果为true的话，将所有主机分配到组，不需填写host_id_list，如果为false的话，需要填写host_id_list **约束限制**: 不涉及 **取值范围**: - true: 将所有主机分配到组，不需填写host_id_list。 - false: 非全量分配到组，仅对指定的主机列表分配到组，需要填写host_id_list。 **默认取值**: 不涉及
    *
    * @return bool
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool $operateAll **参数解释**: 是否要对全量主机分配到组，如果为true的话，将所有主机分配到组，不需填写host_id_list，如果为false的话，需要填写host_id_list **约束限制**: 不涉及 **取值范围**: - true: 将所有主机分配到组，不需填写host_id_list。 - false: 非全量分配到组，仅对指定的主机列表分配到组，需要填写host_id_list。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
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


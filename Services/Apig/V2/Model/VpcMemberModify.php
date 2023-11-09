<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcMemberModify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcMemberModify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * members  后端实例列表
    * memberGroupName  需要修改的后端服务器组  不传时使用members中的定义对VPC通道后端进行全量覆盖修改。  传入时，只对members中对应后端服务器组的后端实例进行处理，其他后端服务器组的入参会被忽略。例如：member_group_name=primary时，只处理members中后端服务器组为105c6902457144a4820dff8b1ad63331的后端实例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'members' => '\HuaweiCloud\SDK\Apig\V2\Model\MemberInfo[]',
            'memberGroupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * members  后端实例列表
    * memberGroupName  需要修改的后端服务器组  不传时使用members中的定义对VPC通道后端进行全量覆盖修改。  传入时，只对members中对应后端服务器组的后端实例进行处理，其他后端服务器组的入参会被忽略。例如：member_group_name=primary时，只处理members中后端服务器组为105c6902457144a4820dff8b1ad63331的后端实例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'members' => null,
        'memberGroupName' => null
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
    * members  后端实例列表
    * memberGroupName  需要修改的后端服务器组  不传时使用members中的定义对VPC通道后端进行全量覆盖修改。  传入时，只对members中对应后端服务器组的后端实例进行处理，其他后端服务器组的入参会被忽略。例如：member_group_name=primary时，只处理members中后端服务器组为105c6902457144a4820dff8b1ad63331的后端实例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'members' => 'members',
            'memberGroupName' => 'member_group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * members  后端实例列表
    * memberGroupName  需要修改的后端服务器组  不传时使用members中的定义对VPC通道后端进行全量覆盖修改。  传入时，只对members中对应后端服务器组的后端实例进行处理，其他后端服务器组的入参会被忽略。例如：member_group_name=primary时，只处理members中后端服务器组为105c6902457144a4820dff8b1ad63331的后端实例。
    *
    * @var string[]
    */
    protected static $setters = [
            'members' => 'setMembers',
            'memberGroupName' => 'setMemberGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * members  后端实例列表
    * memberGroupName  需要修改的后端服务器组  不传时使用members中的定义对VPC通道后端进行全量覆盖修改。  传入时，只对members中对应后端服务器组的后端实例进行处理，其他后端服务器组的入参会被忽略。例如：member_group_name=primary时，只处理members中后端服务器组为105c6902457144a4820dff8b1ad63331的后端实例。
    *
    * @var string[]
    */
    protected static $getters = [
            'members' => 'getMembers',
            'memberGroupName' => 'getMemberGroupName'
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
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['memberGroupName'] = isset($data['memberGroupName']) ? $data['memberGroupName'] : null;
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
    * Gets members
    *  后端实例列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MemberInfo[]|null
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MemberInfo[]|null $members 后端实例列表
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets memberGroupName
    *  需要修改的后端服务器组  不传时使用members中的定义对VPC通道后端进行全量覆盖修改。  传入时，只对members中对应后端服务器组的后端实例进行处理，其他后端服务器组的入参会被忽略。例如：member_group_name=primary时，只处理members中后端服务器组为105c6902457144a4820dff8b1ad63331的后端实例。
    *
    * @return string|null
    */
    public function getMemberGroupName()
    {
        return $this->container['memberGroupName'];
    }

    /**
    * Sets memberGroupName
    *
    * @param string|null $memberGroupName 需要修改的后端服务器组  不传时使用members中的定义对VPC通道后端进行全量覆盖修改。  传入时，只对members中对应后端服务器组的后端实例进行处理，其他后端服务器组的入参会被忽略。例如：member_group_name=primary时，只处理members中后端服务器组为105c6902457144a4820dff8b1ad63331的后端实例。
    *
    * @return $this
    */
    public function setMemberGroupName($memberGroupName)
    {
        $this->container['memberGroupName'] = $memberGroupName;
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


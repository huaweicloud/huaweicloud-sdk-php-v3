<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReplicationProfilesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReplicationProfilesResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * profileId  配置文件id。
    * profileName  配置文件名。
    * agentType  代理类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * description  配置文件说明。
    * isDefProfile  是否为默认配置。  true：是默认配置。 false：不是默认配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'profileId' => 'string',
            'profileName' => 'string',
            'agentType' => 'string',
            'description' => 'string',
            'isDefProfile' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * profileId  配置文件id。
    * profileName  配置文件名。
    * agentType  代理类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * description  配置文件说明。
    * isDefProfile  是否为默认配置。  true：是默认配置。 false：不是默认配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'profileId' => null,
        'profileName' => null,
        'agentType' => null,
        'description' => null,
        'isDefProfile' => null
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
    * profileId  配置文件id。
    * profileName  配置文件名。
    * agentType  代理类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * description  配置文件说明。
    * isDefProfile  是否为默认配置。  true：是默认配置。 false：不是默认配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'profileId' => 'profile_id',
            'profileName' => 'profile_name',
            'agentType' => 'agent_type',
            'description' => 'description',
            'isDefProfile' => 'is_def_profile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * profileId  配置文件id。
    * profileName  配置文件名。
    * agentType  代理类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * description  配置文件说明。
    * isDefProfile  是否为默认配置。  true：是默认配置。 false：不是默认配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'profileId' => 'setProfileId',
            'profileName' => 'setProfileName',
            'agentType' => 'setAgentType',
            'description' => 'setDescription',
            'isDefProfile' => 'setIsDefProfile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * profileId  配置文件id。
    * profileName  配置文件名。
    * agentType  代理类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * description  配置文件说明。
    * isDefProfile  是否为默认配置。  true：是默认配置。 false：不是默认配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'profileId' => 'getProfileId',
            'profileName' => 'getProfileName',
            'agentType' => 'getAgentType',
            'description' => 'getDescription',
            'isDefProfile' => 'getIsDefProfile'
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
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['profileName'] = isset($data['profileName']) ? $data['profileName'] : null;
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isDefProfile'] = isset($data['isDefProfile']) ? $data['isDefProfile'] : null;
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
    * Gets profileId
    *  配置文件id。
    *
    * @return string|null
    */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
    * Sets profileId
    *
    * @param string|null $profileId 配置文件id。
    *
    * @return $this
    */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;
        return $this;
    }

    /**
    * Gets profileName
    *  配置文件名。
    *
    * @return string|null
    */
    public function getProfileName()
    {
        return $this->container['profileName'];
    }

    /**
    * Sets profileName
    *
    * @param string|null $profileName 配置文件名。
    *
    * @return $this
    */
    public function setProfileName($profileName)
    {
        $this->container['profileName'] = $profileName;
        return $this;
    }

    /**
    * Gets agentType
    *  代理类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    *
    * @return string|null
    */
    public function getAgentType()
    {
        return $this->container['agentType'];
    }

    /**
    * Sets agentType
    *
    * @param string|null $agentType 代理类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    *
    * @return $this
    */
    public function setAgentType($agentType)
    {
        $this->container['agentType'] = $agentType;
        return $this;
    }

    /**
    * Gets description
    *  配置文件说明。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 配置文件说明。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isDefProfile
    *  是否为默认配置。  true：是默认配置。 false：不是默认配置。
    *
    * @return bool|null
    */
    public function getIsDefProfile()
    {
        return $this->container['isDefProfile'];
    }

    /**
    * Sets isDefProfile
    *
    * @param bool|null $isDefProfile 是否为默认配置。  true：是默认配置。 false：不是默认配置。
    *
    * @return $this
    */
    public function setIsDefProfile($isDefProfile)
    {
        $this->container['isDefProfile'] = $isDefProfile;
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


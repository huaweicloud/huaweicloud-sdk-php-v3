<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloseProtectionInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloseProtectionInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIdList  需要关闭勒索防护的主机ID列表
    * agentIdList  需要关闭勒索防护的agentID列表
    * closeProtectionType  关闭防护类型，包含如下：   - close_anti : 关闭勒索防护；暂不支持关闭备份防护，若需要解绑存储库，请前往cbr服务进行操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIdList' => 'string[]',
            'agentIdList' => 'string[]',
            'closeProtectionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIdList  需要关闭勒索防护的主机ID列表
    * agentIdList  需要关闭勒索防护的agentID列表
    * closeProtectionType  关闭防护类型，包含如下：   - close_anti : 关闭勒索防护；暂不支持关闭备份防护，若需要解绑存储库，请前往cbr服务进行操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIdList' => null,
        'agentIdList' => null,
        'closeProtectionType' => null
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
    * hostIdList  需要关闭勒索防护的主机ID列表
    * agentIdList  需要关闭勒索防护的agentID列表
    * closeProtectionType  关闭防护类型，包含如下：   - close_anti : 关闭勒索防护；暂不支持关闭备份防护，若需要解绑存储库，请前往cbr服务进行操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIdList' => 'host_id_list',
            'agentIdList' => 'agent_id_list',
            'closeProtectionType' => 'close_protection_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIdList  需要关闭勒索防护的主机ID列表
    * agentIdList  需要关闭勒索防护的agentID列表
    * closeProtectionType  关闭防护类型，包含如下：   - close_anti : 关闭勒索防护；暂不支持关闭备份防护，若需要解绑存储库，请前往cbr服务进行操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIdList' => 'setHostIdList',
            'agentIdList' => 'setAgentIdList',
            'closeProtectionType' => 'setCloseProtectionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIdList  需要关闭勒索防护的主机ID列表
    * agentIdList  需要关闭勒索防护的agentID列表
    * closeProtectionType  关闭防护类型，包含如下：   - close_anti : 关闭勒索防护；暂不支持关闭备份防护，若需要解绑存储库，请前往cbr服务进行操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIdList' => 'getHostIdList',
            'agentIdList' => 'getAgentIdList',
            'closeProtectionType' => 'getCloseProtectionType'
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
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
        $this->container['closeProtectionType'] = isset($data['closeProtectionType']) ? $data['closeProtectionType'] : null;
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
        if ($this->container['agentIdList'] === null) {
            $invalidProperties[] = "'agentIdList' can't be null";
        }
        if ($this->container['closeProtectionType'] === null) {
            $invalidProperties[] = "'closeProtectionType' can't be null";
        }
            if ((mb_strlen($this->container['closeProtectionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'closeProtectionType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['closeProtectionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeProtectionType', the character length must be bigger than or equal to 0.";
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
    *  需要关闭勒索防护的主机ID列表
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
    * @param string[] $hostIdList 需要关闭勒索防护的主机ID列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets agentIdList
    *  需要关闭勒索防护的agentID列表
    *
    * @return string[]
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[] $agentIdList 需要关闭勒索防护的agentID列表
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets closeProtectionType
    *  关闭防护类型，包含如下：   - close_anti : 关闭勒索防护；暂不支持关闭备份防护，若需要解绑存储库，请前往cbr服务进行操作。
    *
    * @return string
    */
    public function getCloseProtectionType()
    {
        return $this->container['closeProtectionType'];
    }

    /**
    * Sets closeProtectionType
    *
    * @param string $closeProtectionType 关闭防护类型，包含如下：   - close_anti : 关闭勒索防护；暂不支持关闭备份防护，若需要解绑存储库，请前往cbr服务进行操作。
    *
    * @return $this
    */
    public function setCloseProtectionType($closeProtectionType)
    {
        $this->container['closeProtectionType'] = $closeProtectionType;
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


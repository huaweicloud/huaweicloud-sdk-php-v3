<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDeploymentHostRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDeploymentHostRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  主机集群id
    * hostId  主机id
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'hostId' => 'string',
            'contentType' => 'string',
            'body' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  主机集群id
    * hostId  主机id
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'hostId' => null,
        'contentType' => null,
        'body' => null
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
    * groupId  主机集群id
    * hostId  主机id
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'hostId' => 'host_id',
            'contentType' => 'Content-Type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  主机集群id
    * hostId  主机id
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'hostId' => 'setHostId',
            'contentType' => 'setContentType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  主机集群id
    * hostId  主机id
    * contentType  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'hostId' => 'getHostId',
            'contentType' => 'getContentType',
            'body' => 'getBody'
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
    const CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8 = 'application/json;charset=utf-8';
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_APPLICATION_JSONCHARSETUTF_8,
            self::CONTENT_TYPE_APPLICATION_JSON,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : 'application/json;charset=utf-8';
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
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
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            $allowedValues = $this->getContentTypeAllowableValues();
                if (!is_null($this->container['contentType']) && !in_array($this->container['contentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'contentType', must be one of '%s'",
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
    * Gets groupId
    *  主机集群id
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
    * @param string $groupId 主机集群id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets hostId
    *  主机id
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId 主机id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets contentType
    *  消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 消息体的类型（格式），下方类型可任选其一使用：                         application/json;charset=utf-8                         application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostRequest|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\DeploymentHostRequest|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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


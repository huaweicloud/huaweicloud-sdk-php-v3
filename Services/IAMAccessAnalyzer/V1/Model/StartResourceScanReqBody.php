<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartResourceScanReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartResourceScanReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceProjectId  资源所属的项目标识符
    * resourceUrn  资源的唯一资源标识符。
    * findingType  findingType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceOwnerAccount' => 'string',
            'resourceProjectId' => 'string',
            'resourceUrn' => 'string',
            'findingType' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingType'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceProjectId  资源所属的项目标识符
    * resourceUrn  资源的唯一资源标识符。
    * findingType  findingType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceOwnerAccount' => null,
        'resourceProjectId' => null,
        'resourceUrn' => null,
        'findingType' => null
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
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceProjectId  资源所属的项目标识符
    * resourceUrn  资源的唯一资源标识符。
    * findingType  findingType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'resourceOwnerAccount' => 'resource_owner_account',
            'resourceProjectId' => 'resource_project_id',
            'resourceUrn' => 'resource_urn',
            'findingType' => 'finding_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceProjectId  资源所属的项目标识符
    * resourceUrn  资源的唯一资源标识符。
    * findingType  findingType
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceOwnerAccount' => 'setResourceOwnerAccount',
            'resourceProjectId' => 'setResourceProjectId',
            'resourceUrn' => 'setResourceUrn',
            'findingType' => 'setFindingType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源的唯一标识符。
    * resourceOwnerAccount  拥有资源的账号ID。
    * resourceProjectId  资源所属的项目标识符
    * resourceUrn  资源的唯一资源标识符。
    * findingType  findingType
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceOwnerAccount' => 'getResourceOwnerAccount',
            'resourceProjectId' => 'getResourceProjectId',
            'resourceUrn' => 'getResourceUrn',
            'findingType' => 'getFindingType'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceOwnerAccount'] = isset($data['resourceOwnerAccount']) ? $data['resourceOwnerAccount'] : null;
        $this->container['resourceProjectId'] = isset($data['resourceProjectId']) ? $data['resourceProjectId'] : null;
        $this->container['resourceUrn'] = isset($data['resourceUrn']) ? $data['resourceUrn'] : null;
        $this->container['findingType'] = isset($data['findingType']) ? $data['findingType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/^[\\w-]+$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['resourceOwnerAccount'] === null) {
            $invalidProperties[] = "'resourceOwnerAccount' can't be null";
        }
            if ((mb_strlen($this->container['resourceOwnerAccount']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceOwnerAccount', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceOwnerAccount']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceOwnerAccount', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['resourceOwnerAccount'])) {
                $invalidProperties[] = "invalid value for 'resourceOwnerAccount', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['resourceProjectId']) && (mb_strlen($this->container['resourceProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceProjectId']) && !preg_match("/^[\\w-]+$/", $this->container['resourceProjectId'])) {
                $invalidProperties[] = "invalid value for 'resourceProjectId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['resourceUrn'] === null) {
            $invalidProperties[] = "'resourceUrn' can't be null";
        }
            if ((mb_strlen($this->container['resourceUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be smaller than or equal to 1500.";
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
    * Gets resourceId
    *  资源的唯一标识符。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源的唯一标识符。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceOwnerAccount
    *  拥有资源的账号ID。
    *
    * @return string
    */
    public function getResourceOwnerAccount()
    {
        return $this->container['resourceOwnerAccount'];
    }

    /**
    * Sets resourceOwnerAccount
    *
    * @param string $resourceOwnerAccount 拥有资源的账号ID。
    *
    * @return $this
    */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->container['resourceOwnerAccount'] = $resourceOwnerAccount;
        return $this;
    }

    /**
    * Gets resourceProjectId
    *  资源所属的项目标识符
    *
    * @return string|null
    */
    public function getResourceProjectId()
    {
        return $this->container['resourceProjectId'];
    }

    /**
    * Sets resourceProjectId
    *
    * @param string|null $resourceProjectId 资源所属的项目标识符
    *
    * @return $this
    */
    public function setResourceProjectId($resourceProjectId)
    {
        $this->container['resourceProjectId'] = $resourceProjectId;
        return $this;
    }

    /**
    * Gets resourceUrn
    *  资源的唯一资源标识符。
    *
    * @return string
    */
    public function getResourceUrn()
    {
        return $this->container['resourceUrn'];
    }

    /**
    * Sets resourceUrn
    *
    * @param string $resourceUrn 资源的唯一资源标识符。
    *
    * @return $this
    */
    public function setResourceUrn($resourceUrn)
    {
        $this->container['resourceUrn'] = $resourceUrn;
        return $this;
    }

    /**
    * Gets findingType
    *  findingType
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingType|null
    */
    public function getFindingType()
    {
        return $this->container['findingType'];
    }

    /**
    * Sets findingType
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\FindingType|null $findingType findingType
    *
    * @return $this
    */
    public function setFindingType($findingType)
    {
        $this->container['findingType'] = $findingType;
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


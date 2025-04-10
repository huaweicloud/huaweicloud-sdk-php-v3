<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplySecurityTableAuthorityResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplySecurityTableAuthorityResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * describe  描述
    * permissionCenterUrl  审批页面地址
    * workspaceId  工作空间id
    * applicationId  工单id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'describe' => 'string',
            'permissionCenterUrl' => 'string',
            'workspaceId' => 'string',
            'applicationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * describe  描述
    * permissionCenterUrl  审批页面地址
    * workspaceId  工作空间id
    * applicationId  工单id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'describe' => null,
        'permissionCenterUrl' => null,
        'workspaceId' => null,
        'applicationId' => null
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
    * describe  描述
    * permissionCenterUrl  审批页面地址
    * workspaceId  工作空间id
    * applicationId  工单id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'describe' => 'describe',
            'permissionCenterUrl' => 'permission_center_url',
            'workspaceId' => 'workspace_id',
            'applicationId' => 'application_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * describe  描述
    * permissionCenterUrl  审批页面地址
    * workspaceId  工作空间id
    * applicationId  工单id
    *
    * @var string[]
    */
    protected static $setters = [
            'describe' => 'setDescribe',
            'permissionCenterUrl' => 'setPermissionCenterUrl',
            'workspaceId' => 'setWorkspaceId',
            'applicationId' => 'setApplicationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * describe  描述
    * permissionCenterUrl  审批页面地址
    * workspaceId  工作空间id
    * applicationId  工单id
    *
    * @var string[]
    */
    protected static $getters = [
            'describe' => 'getDescribe',
            'permissionCenterUrl' => 'getPermissionCenterUrl',
            'workspaceId' => 'getWorkspaceId',
            'applicationId' => 'getApplicationId'
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
        $this->container['describe'] = isset($data['describe']) ? $data['describe'] : null;
        $this->container['permissionCenterUrl'] = isset($data['permissionCenterUrl']) ? $data['permissionCenterUrl'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
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
    * Gets describe
    *  描述
    *
    * @return string|null
    */
    public function getDescribe()
    {
        return $this->container['describe'];
    }

    /**
    * Sets describe
    *
    * @param string|null $describe 描述
    *
    * @return $this
    */
    public function setDescribe($describe)
    {
        $this->container['describe'] = $describe;
        return $this;
    }

    /**
    * Gets permissionCenterUrl
    *  审批页面地址
    *
    * @return string|null
    */
    public function getPermissionCenterUrl()
    {
        return $this->container['permissionCenterUrl'];
    }

    /**
    * Sets permissionCenterUrl
    *
    * @param string|null $permissionCenterUrl 审批页面地址
    *
    * @return $this
    */
    public function setPermissionCenterUrl($permissionCenterUrl)
    {
        $this->container['permissionCenterUrl'] = $permissionCenterUrl;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets applicationId
    *  工单id
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 工单id
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
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


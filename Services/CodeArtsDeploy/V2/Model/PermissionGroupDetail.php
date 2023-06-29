<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionGroupDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionGroupDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有管理权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canView' => 'bool',
            'canEdit' => 'bool',
            'canDelete' => 'bool',
            'canAddHost' => 'bool',
            'canManage' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有管理权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canView' => null,
        'canEdit' => null,
        'canDelete' => null,
        'canAddHost' => null,
        'canManage' => null
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
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有管理权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canView' => 'can_view',
            'canEdit' => 'can_edit',
            'canDelete' => 'can_delete',
            'canAddHost' => 'can_add_host',
            'canManage' => 'can_manage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有管理权限
    *
    * @var string[]
    */
    protected static $setters = [
            'canView' => 'setCanView',
            'canEdit' => 'setCanEdit',
            'canDelete' => 'setCanDelete',
            'canAddHost' => 'setCanAddHost',
            'canManage' => 'setCanManage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canView  是否有查看权限
    * canEdit  是否有编辑权限
    * canDelete  是否有删除权限
    * canAddHost  是否有添加主机权限
    * canManage  是否有管理权限
    *
    * @var string[]
    */
    protected static $getters = [
            'canView' => 'getCanView',
            'canEdit' => 'getCanEdit',
            'canDelete' => 'getCanDelete',
            'canAddHost' => 'getCanAddHost',
            'canManage' => 'getCanManage'
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
        $this->container['canView'] = isset($data['canView']) ? $data['canView'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canAddHost'] = isset($data['canAddHost']) ? $data['canAddHost'] : null;
        $this->container['canManage'] = isset($data['canManage']) ? $data['canManage'] : null;
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
    * Gets canView
    *  是否有查看权限
    *
    * @return bool|null
    */
    public function getCanView()
    {
        return $this->container['canView'];
    }

    /**
    * Sets canView
    *
    * @param bool|null $canView 是否有查看权限
    *
    * @return $this
    */
    public function setCanView($canView)
    {
        $this->container['canView'] = $canView;
        return $this;
    }

    /**
    * Gets canEdit
    *  是否有编辑权限
    *
    * @return bool|null
    */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
    * Sets canEdit
    *
    * @param bool|null $canEdit 是否有编辑权限
    *
    * @return $this
    */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;
        return $this;
    }

    /**
    * Gets canDelete
    *  是否有删除权限
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete 是否有删除权限
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets canAddHost
    *  是否有添加主机权限
    *
    * @return bool|null
    */
    public function getCanAddHost()
    {
        return $this->container['canAddHost'];
    }

    /**
    * Sets canAddHost
    *
    * @param bool|null $canAddHost 是否有添加主机权限
    *
    * @return $this
    */
    public function setCanAddHost($canAddHost)
    {
        $this->container['canAddHost'] = $canAddHost;
        return $this;
    }

    /**
    * Gets canManage
    *  是否有管理权限
    *
    * @return bool|null
    */
    public function getCanManage()
    {
        return $this->container['canManage'];
    }

    /**
    * Sets canManage
    *
    * @param bool|null $canManage 是否有管理权限
    *
    * @return $this
    */
    public function setCanManage($canManage)
    {
        $this->container['canManage'] = $canManage;
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


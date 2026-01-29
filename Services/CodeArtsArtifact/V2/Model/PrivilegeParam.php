<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivilegeParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivilegeParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  **参数解释**: 角色id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    * areaServiceId  **参数解释**: 地域服务id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectPath  **参数解释**: 授权对象路径。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectTypeId  **参数解释**: 授权对象id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * operations  **参数解释**: 操作权限，多个权限以英文逗号隔开。 **约束限制**: 不涉及。 **取值范围**: 可选值：createrepository,editrepository,restore,deleterepository,physicdelete,restoreall,clearall,deleteorredeploy,downloadorview,import,upload,export。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'projectId' => 'string',
            'areaServiceId' => 'string',
            'grantedObjectPath' => 'string',
            'grantedObjectTypeId' => 'string',
            'operations' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  **参数解释**: 角色id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    * areaServiceId  **参数解释**: 地域服务id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectPath  **参数解释**: 授权对象路径。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectTypeId  **参数解释**: 授权对象id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * operations  **参数解释**: 操作权限，多个权限以英文逗号隔开。 **约束限制**: 不涉及。 **取值范围**: 可选值：createrepository,editrepository,restore,deleterepository,physicdelete,restoreall,clearall,deleteorredeploy,downloadorview,import,upload,export。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'projectId' => null,
        'areaServiceId' => null,
        'grantedObjectPath' => null,
        'grantedObjectTypeId' => null,
        'operations' => null
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
    * roleId  **参数解释**: 角色id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    * areaServiceId  **参数解释**: 地域服务id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectPath  **参数解释**: 授权对象路径。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectTypeId  **参数解释**: 授权对象id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * operations  **参数解释**: 操作权限，多个权限以英文逗号隔开。 **约束限制**: 不涉及。 **取值范围**: 可选值：createrepository,editrepository,restore,deleterepository,physicdelete,restoreall,clearall,deleteorredeploy,downloadorview,import,upload,export。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'projectId' => 'project_id',
            'areaServiceId' => 'area_service_id',
            'grantedObjectPath' => 'granted_object_path',
            'grantedObjectTypeId' => 'granted_object_type_id',
            'operations' => 'operations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  **参数解释**: 角色id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    * areaServiceId  **参数解释**: 地域服务id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectPath  **参数解释**: 授权对象路径。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectTypeId  **参数解释**: 授权对象id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * operations  **参数解释**: 操作权限，多个权限以英文逗号隔开。 **约束限制**: 不涉及。 **取值范围**: 可选值：createrepository,editrepository,restore,deleterepository,physicdelete,restoreall,clearall,deleteorredeploy,downloadorview,import,upload,export。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'projectId' => 'setProjectId',
            'areaServiceId' => 'setAreaServiceId',
            'grantedObjectPath' => 'setGrantedObjectPath',
            'grantedObjectTypeId' => 'setGrantedObjectTypeId',
            'operations' => 'setOperations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  **参数解释**: 角色id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * projectId  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    * areaServiceId  **参数解释**: 地域服务id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectPath  **参数解释**: 授权对象路径。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * grantedObjectTypeId  **参数解释**: 授权对象id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    * operations  **参数解释**: 操作权限，多个权限以英文逗号隔开。 **约束限制**: 不涉及。 **取值范围**: 可选值：createrepository,editrepository,restore,deleterepository,physicdelete,restoreall,clearall,deleteorredeploy,downloadorview,import,upload,export。 **默认取值**: 无。
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'projectId' => 'getProjectId',
            'areaServiceId' => 'getAreaServiceId',
            'grantedObjectPath' => 'getGrantedObjectPath',
            'grantedObjectTypeId' => 'getGrantedObjectTypeId',
            'operations' => 'getOperations'
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
    const OPERATIONS_CREATEREPOSITORY = 'createrepository';
    const OPERATIONS_EDITREPOSITORY = 'editrepository';
    const OPERATIONS_RESTORE = 'restore';
    const OPERATIONS_DELETEREPOSITORY = 'deleterepository';
    const OPERATIONS_PHYSICDELETE = 'physicdelete';
    const OPERATIONS_RESTOREALL = 'restoreall';
    const OPERATIONS_CLEARALL = 'clearall';
    const OPERATIONS_DELETEORREDEPLOY = 'deleteorredeploy';
    const OPERATIONS_DOWNLOADORVIEW = 'downloadorview';
    const OPERATIONS_IMPORT = 'import';
    const OPERATIONS_UPLOAD = 'upload';
    const OPERATIONS_EXPORT = 'export';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationsAllowableValues()
    {
        return [
            self::OPERATIONS_CREATEREPOSITORY,
            self::OPERATIONS_EDITREPOSITORY,
            self::OPERATIONS_RESTORE,
            self::OPERATIONS_DELETEREPOSITORY,
            self::OPERATIONS_PHYSICDELETE,
            self::OPERATIONS_RESTOREALL,
            self::OPERATIONS_CLEARALL,
            self::OPERATIONS_DELETEORREDEPLOY,
            self::OPERATIONS_DOWNLOADORVIEW,
            self::OPERATIONS_IMPORT,
            self::OPERATIONS_UPLOAD,
            self::OPERATIONS_EXPORT,
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['areaServiceId'] = isset($data['areaServiceId']) ? $data['areaServiceId'] : null;
        $this->container['grantedObjectPath'] = isset($data['grantedObjectPath']) ? $data['grantedObjectPath'] : null;
        $this->container['grantedObjectTypeId'] = isset($data['grantedObjectTypeId']) ? $data['grantedObjectTypeId'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['roleId'] === null) {
            $invalidProperties[] = "'roleId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[a-z0-9]{32,32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[a-z0-9]{32,32}$/.";
            }
        if ($this->container['areaServiceId'] === null) {
            $invalidProperties[] = "'areaServiceId' can't be null";
        }
        if ($this->container['grantedObjectPath'] === null) {
            $invalidProperties[] = "'grantedObjectPath' can't be null";
        }
        if ($this->container['grantedObjectTypeId'] === null) {
            $invalidProperties[] = "'grantedObjectTypeId' can't be null";
        }
        if ($this->container['operations'] === null) {
            $invalidProperties[] = "'operations' can't be null";
        }
            $allowedValues = $this->getOperationsAllowableValues();
                if (!is_null($this->container['operations']) && !in_array($this->container['operations'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operations', must be one of '%s'",
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
    * Gets roleId
    *  **参数解释**: 角色id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string $roleId **参数解释**: 角色id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**: 项目ID，可以从调用API处获取，也可以从控制台获取。获取方式请参考[获取项目ID](CloudArtifact_api_0015.xml)。 **约束限制**: 只能由英文字母、数字组成，且长度为32个字符。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets areaServiceId
    *  **参数解释**: 地域服务id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string
    */
    public function getAreaServiceId()
    {
        return $this->container['areaServiceId'];
    }

    /**
    * Sets areaServiceId
    *
    * @param string $areaServiceId **参数解释**: 地域服务id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setAreaServiceId($areaServiceId)
    {
        $this->container['areaServiceId'] = $areaServiceId;
        return $this;
    }

    /**
    * Gets grantedObjectPath
    *  **参数解释**: 授权对象路径。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string
    */
    public function getGrantedObjectPath()
    {
        return $this->container['grantedObjectPath'];
    }

    /**
    * Sets grantedObjectPath
    *
    * @param string $grantedObjectPath **参数解释**: 授权对象路径。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setGrantedObjectPath($grantedObjectPath)
    {
        $this->container['grantedObjectPath'] = $grantedObjectPath;
        return $this;
    }

    /**
    * Gets grantedObjectTypeId
    *  **参数解释**: 授权对象id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return string
    */
    public function getGrantedObjectTypeId()
    {
        return $this->container['grantedObjectTypeId'];
    }

    /**
    * Sets grantedObjectTypeId
    *
    * @param string $grantedObjectTypeId **参数解释**: 授权对象id。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setGrantedObjectTypeId($grantedObjectTypeId)
    {
        $this->container['grantedObjectTypeId'] = $grantedObjectTypeId;
        return $this;
    }

    /**
    * Gets operations
    *  **参数解释**: 操作权限，多个权限以英文逗号隔开。 **约束限制**: 不涉及。 **取值范围**: 可选值：createrepository,editrepository,restore,deleterepository,physicdelete,restoreall,clearall,deleteorredeploy,downloadorview,import,upload,export。 **默认取值**: 无。
    *
    * @return string
    */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
    * Sets operations
    *
    * @param string $operations **参数解释**: 操作权限，多个权限以英文逗号隔开。 **约束限制**: 不涉及。 **取值范围**: 可选值：createrepository,editrepository,restore,deleterepository,physicdelete,restoreall,clearall,deleteorredeploy,downloadorview,import,upload,export。 **默认取值**: 无。
    *
    * @return $this
    */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;
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


<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPackageDetailRespReleasePackage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPackageDetailResp_release_package';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applyTimestamp  申请时间，13位时间戳
    * applyUserId  申请id
    * applyUserName  申请人名称
    * deleteFlag  是否删除，0:不删除，1:不删除
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployTimestamp  发布时间，13位时间戳
    * deployUserId  发布人id
    * deployUserName  发布人名称
    * packageApprovers  发布包审批信息
    * packageId  发布包id
    * packageName  发布包名称
    * projectId  项目ID+workspace+workspaceId
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applyTimestamp' => 'int',
            'applyUserId' => 'string',
            'applyUserName' => 'string',
            'deleteFlag' => 'int',
            'deployStatus' => 'int',
            'deployTimestamp' => 'int',
            'deployUserId' => 'string',
            'deployUserName' => 'string',
            'packageApprovers' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPackageDetailRespReleasePackagePackageApprovers[]',
            'packageId' => 'string',
            'packageName' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applyTimestamp  申请时间，13位时间戳
    * applyUserId  申请id
    * applyUserName  申请人名称
    * deleteFlag  是否删除，0:不删除，1:不删除
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployTimestamp  发布时间，13位时间戳
    * deployUserId  发布人id
    * deployUserName  发布人名称
    * packageApprovers  发布包审批信息
    * packageId  发布包id
    * packageName  发布包名称
    * projectId  项目ID+workspace+workspaceId
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applyTimestamp' => 'int64',
        'applyUserId' => null,
        'applyUserName' => null,
        'deleteFlag' => 'int32',
        'deployStatus' => 'int32',
        'deployTimestamp' => 'int64',
        'deployUserId' => null,
        'deployUserName' => null,
        'packageApprovers' => null,
        'packageId' => null,
        'packageName' => null,
        'projectId' => null,
        'workspaceId' => null
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
    * applyTimestamp  申请时间，13位时间戳
    * applyUserId  申请id
    * applyUserName  申请人名称
    * deleteFlag  是否删除，0:不删除，1:不删除
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployTimestamp  发布时间，13位时间戳
    * deployUserId  发布人id
    * deployUserName  发布人名称
    * packageApprovers  发布包审批信息
    * packageId  发布包id
    * packageName  发布包名称
    * projectId  项目ID+workspace+workspaceId
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applyTimestamp' => 'apply_timestamp',
            'applyUserId' => 'apply_user_id',
            'applyUserName' => 'apply_user_name',
            'deleteFlag' => 'delete_flag',
            'deployStatus' => 'deploy_status',
            'deployTimestamp' => 'deploy_timestamp',
            'deployUserId' => 'deploy_user_id',
            'deployUserName' => 'deploy_user_name',
            'packageApprovers' => 'package_approvers',
            'packageId' => 'package_id',
            'packageName' => 'package_name',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applyTimestamp  申请时间，13位时间戳
    * applyUserId  申请id
    * applyUserName  申请人名称
    * deleteFlag  是否删除，0:不删除，1:不删除
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployTimestamp  发布时间，13位时间戳
    * deployUserId  发布人id
    * deployUserName  发布人名称
    * packageApprovers  发布包审批信息
    * packageId  发布包id
    * packageName  发布包名称
    * projectId  项目ID+workspace+workspaceId
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $setters = [
            'applyTimestamp' => 'setApplyTimestamp',
            'applyUserId' => 'setApplyUserId',
            'applyUserName' => 'setApplyUserName',
            'deleteFlag' => 'setDeleteFlag',
            'deployStatus' => 'setDeployStatus',
            'deployTimestamp' => 'setDeployTimestamp',
            'deployUserId' => 'setDeployUserId',
            'deployUserName' => 'setDeployUserName',
            'packageApprovers' => 'setPackageApprovers',
            'packageId' => 'setPackageId',
            'packageName' => 'setPackageName',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applyTimestamp  申请时间，13位时间戳
    * applyUserId  申请id
    * applyUserName  申请人名称
    * deleteFlag  是否删除，0:不删除，1:不删除
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployTimestamp  发布时间，13位时间戳
    * deployUserId  发布人id
    * deployUserName  发布人名称
    * packageApprovers  发布包审批信息
    * packageId  发布包id
    * packageName  发布包名称
    * projectId  项目ID+workspace+workspaceId
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $getters = [
            'applyTimestamp' => 'getApplyTimestamp',
            'applyUserId' => 'getApplyUserId',
            'applyUserName' => 'getApplyUserName',
            'deleteFlag' => 'getDeleteFlag',
            'deployStatus' => 'getDeployStatus',
            'deployTimestamp' => 'getDeployTimestamp',
            'deployUserId' => 'getDeployUserId',
            'deployUserName' => 'getDeployUserName',
            'packageApprovers' => 'getPackageApprovers',
            'packageId' => 'getPackageId',
            'packageName' => 'getPackageName',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['applyTimestamp'] = isset($data['applyTimestamp']) ? $data['applyTimestamp'] : null;
        $this->container['applyUserId'] = isset($data['applyUserId']) ? $data['applyUserId'] : null;
        $this->container['applyUserName'] = isset($data['applyUserName']) ? $data['applyUserName'] : null;
        $this->container['deleteFlag'] = isset($data['deleteFlag']) ? $data['deleteFlag'] : null;
        $this->container['deployStatus'] = isset($data['deployStatus']) ? $data['deployStatus'] : null;
        $this->container['deployTimestamp'] = isset($data['deployTimestamp']) ? $data['deployTimestamp'] : null;
        $this->container['deployUserId'] = isset($data['deployUserId']) ? $data['deployUserId'] : null;
        $this->container['deployUserName'] = isset($data['deployUserName']) ? $data['deployUserName'] : null;
        $this->container['packageApprovers'] = isset($data['packageApprovers']) ? $data['packageApprovers'] : null;
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['packageApprovers'] === null) {
            $invalidProperties[] = "'packageApprovers' can't be null";
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
    * Gets applyTimestamp
    *  申请时间，13位时间戳
    *
    * @return int|null
    */
    public function getApplyTimestamp()
    {
        return $this->container['applyTimestamp'];
    }

    /**
    * Sets applyTimestamp
    *
    * @param int|null $applyTimestamp 申请时间，13位时间戳
    *
    * @return $this
    */
    public function setApplyTimestamp($applyTimestamp)
    {
        $this->container['applyTimestamp'] = $applyTimestamp;
        return $this;
    }

    /**
    * Gets applyUserId
    *  申请id
    *
    * @return string|null
    */
    public function getApplyUserId()
    {
        return $this->container['applyUserId'];
    }

    /**
    * Sets applyUserId
    *
    * @param string|null $applyUserId 申请id
    *
    * @return $this
    */
    public function setApplyUserId($applyUserId)
    {
        $this->container['applyUserId'] = $applyUserId;
        return $this;
    }

    /**
    * Gets applyUserName
    *  申请人名称
    *
    * @return string|null
    */
    public function getApplyUserName()
    {
        return $this->container['applyUserName'];
    }

    /**
    * Sets applyUserName
    *
    * @param string|null $applyUserName 申请人名称
    *
    * @return $this
    */
    public function setApplyUserName($applyUserName)
    {
        $this->container['applyUserName'] = $applyUserName;
        return $this;
    }

    /**
    * Gets deleteFlag
    *  是否删除，0:不删除，1:不删除
    *
    * @return int|null
    */
    public function getDeleteFlag()
    {
        return $this->container['deleteFlag'];
    }

    /**
    * Sets deleteFlag
    *
    * @param int|null $deleteFlag 是否删除，0:不删除，1:不删除
    *
    * @return $this
    */
    public function setDeleteFlag($deleteFlag)
    {
        $this->container['deleteFlag'] = $deleteFlag;
        return $this;
    }

    /**
    * Gets deployStatus
    *  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    *
    * @return int|null
    */
    public function getDeployStatus()
    {
        return $this->container['deployStatus'];
    }

    /**
    * Sets deployStatus
    *
    * @param int|null $deployStatus 发布状态，1:待审批,2:成功,3:失败, 5:发布中
    *
    * @return $this
    */
    public function setDeployStatus($deployStatus)
    {
        $this->container['deployStatus'] = $deployStatus;
        return $this;
    }

    /**
    * Gets deployTimestamp
    *  发布时间，13位时间戳
    *
    * @return int|null
    */
    public function getDeployTimestamp()
    {
        return $this->container['deployTimestamp'];
    }

    /**
    * Sets deployTimestamp
    *
    * @param int|null $deployTimestamp 发布时间，13位时间戳
    *
    * @return $this
    */
    public function setDeployTimestamp($deployTimestamp)
    {
        $this->container['deployTimestamp'] = $deployTimestamp;
        return $this;
    }

    /**
    * Gets deployUserId
    *  发布人id
    *
    * @return string|null
    */
    public function getDeployUserId()
    {
        return $this->container['deployUserId'];
    }

    /**
    * Sets deployUserId
    *
    * @param string|null $deployUserId 发布人id
    *
    * @return $this
    */
    public function setDeployUserId($deployUserId)
    {
        $this->container['deployUserId'] = $deployUserId;
        return $this;
    }

    /**
    * Gets deployUserName
    *  发布人名称
    *
    * @return string|null
    */
    public function getDeployUserName()
    {
        return $this->container['deployUserName'];
    }

    /**
    * Sets deployUserName
    *
    * @param string|null $deployUserName 发布人名称
    *
    * @return $this
    */
    public function setDeployUserName($deployUserName)
    {
        $this->container['deployUserName'] = $deployUserName;
        return $this;
    }

    /**
    * Gets packageApprovers
    *  发布包审批信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPackageDetailRespReleasePackagePackageApprovers[]
    */
    public function getPackageApprovers()
    {
        return $this->container['packageApprovers'];
    }

    /**
    * Sets packageApprovers
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ShowPackageDetailRespReleasePackagePackageApprovers[] $packageApprovers 发布包审批信息
    *
    * @return $this
    */
    public function setPackageApprovers($packageApprovers)
    {
        $this->container['packageApprovers'] = $packageApprovers;
        return $this;
    }

    /**
    * Gets packageId
    *  发布包id
    *
    * @return string|null
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string|null $packageId 发布包id
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets packageName
    *  发布包名称
    *
    * @return string|null
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string|null $packageName 发布包名称
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID+workspace+workspaceId
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID+workspace+workspaceId
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
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
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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


<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DevcloudUserDOV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DevcloudUserDOV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * userType  **参数解释**: 用户类型。 **取值范围**: 不涉及。
    * enabled  **参数解释**: enabled。 **取值范围**: 不涉及。
    * repoUserName  **参数解释**: 仓库用户名。 **取值范围**: 不涉及。
    * repoNumber  **参数解释**: repo_number。 **取值范围**: 不涉及。
    * innerRepoUserName  **参数解释**: 内部仓库用户名。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'domainId' => 'string',
            'region' => 'string',
            'createdTime' => 'string',
            'modifiedTime' => 'string',
            'createdUserId' => 'string',
            'createdUserName' => 'string',
            'modifiedUserId' => 'string',
            'modifiedUserName' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'userType' => 'string',
            'enabled' => 'string',
            'repoUserName' => 'string',
            'repoNumber' => 'int',
            'innerRepoUserName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * userType  **参数解释**: 用户类型。 **取值范围**: 不涉及。
    * enabled  **参数解释**: enabled。 **取值范围**: 不涉及。
    * repoUserName  **参数解释**: 仓库用户名。 **取值范围**: 不涉及。
    * repoNumber  **参数解释**: repo_number。 **取值范围**: 不涉及。
    * innerRepoUserName  **参数解释**: 内部仓库用户名。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'domainId' => null,
        'region' => null,
        'createdTime' => null,
        'modifiedTime' => null,
        'createdUserId' => null,
        'createdUserName' => null,
        'modifiedUserId' => null,
        'modifiedUserName' => null,
        'userId' => null,
        'userName' => null,
        'userType' => null,
        'enabled' => null,
        'repoUserName' => null,
        'repoNumber' => 'int32',
        'innerRepoUserName' => null
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
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * userType  **参数解释**: 用户类型。 **取值范围**: 不涉及。
    * enabled  **参数解释**: enabled。 **取值范围**: 不涉及。
    * repoUserName  **参数解释**: 仓库用户名。 **取值范围**: 不涉及。
    * repoNumber  **参数解释**: repo_number。 **取值范围**: 不涉及。
    * innerRepoUserName  **参数解释**: 内部仓库用户名。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'domainId' => 'domain_id',
            'region' => 'region',
            'createdTime' => 'created_time',
            'modifiedTime' => 'modified_time',
            'createdUserId' => 'created_user_id',
            'createdUserName' => 'created_user_name',
            'modifiedUserId' => 'modified_user_id',
            'modifiedUserName' => 'modified_user_name',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'userType' => 'user_type',
            'enabled' => 'enabled',
            'repoUserName' => 'repo_user_name',
            'repoNumber' => 'repo_number',
            'innerRepoUserName' => 'inner_repo_user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * userType  **参数解释**: 用户类型。 **取值范围**: 不涉及。
    * enabled  **参数解释**: enabled。 **取值范围**: 不涉及。
    * repoUserName  **参数解释**: 仓库用户名。 **取值范围**: 不涉及。
    * repoNumber  **参数解释**: repo_number。 **取值范围**: 不涉及。
    * innerRepoUserName  **参数解释**: 内部仓库用户名。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'domainId' => 'setDomainId',
            'region' => 'setRegion',
            'createdTime' => 'setCreatedTime',
            'modifiedTime' => 'setModifiedTime',
            'createdUserId' => 'setCreatedUserId',
            'createdUserName' => 'setCreatedUserName',
            'modifiedUserId' => 'setModifiedUserId',
            'modifiedUserName' => 'setModifiedUserName',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'userType' => 'setUserType',
            'enabled' => 'setEnabled',
            'repoUserName' => 'setRepoUserName',
            'repoNumber' => 'setRepoNumber',
            'innerRepoUserName' => 'setInnerRepoUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * region  **参数解释**: 区域。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * modifiedTime  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    * createdUserId  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    * createdUserName  **参数解释**: 创建人。 **取值范围**: 不涉及。
    * modifiedUserId  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    * modifiedUserName  **参数解释**: 修改人。 **取值范围**: 不涉及。
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * userType  **参数解释**: 用户类型。 **取值范围**: 不涉及。
    * enabled  **参数解释**: enabled。 **取值范围**: 不涉及。
    * repoUserName  **参数解释**: 仓库用户名。 **取值范围**: 不涉及。
    * repoNumber  **参数解释**: repo_number。 **取值范围**: 不涉及。
    * innerRepoUserName  **参数解释**: 内部仓库用户名。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'domainId' => 'getDomainId',
            'region' => 'getRegion',
            'createdTime' => 'getCreatedTime',
            'modifiedTime' => 'getModifiedTime',
            'createdUserId' => 'getCreatedUserId',
            'createdUserName' => 'getCreatedUserName',
            'modifiedUserId' => 'getModifiedUserId',
            'modifiedUserName' => 'getModifiedUserName',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'userType' => 'getUserType',
            'enabled' => 'getEnabled',
            'repoUserName' => 'getRepoUserName',
            'repoNumber' => 'getRepoNumber',
            'innerRepoUserName' => 'getInnerRepoUserName'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['createdUserId'] = isset($data['createdUserId']) ? $data['createdUserId'] : null;
        $this->container['createdUserName'] = isset($data['createdUserName']) ? $data['createdUserName'] : null;
        $this->container['modifiedUserId'] = isset($data['modifiedUserId']) ? $data['modifiedUserId'] : null;
        $this->container['modifiedUserName'] = isset($data['modifiedUserName']) ? $data['modifiedUserName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['repoUserName'] = isset($data['repoUserName']) ? $data['repoUserName'] : null;
        $this->container['repoNumber'] = isset($data['repoNumber']) ? $data['repoNumber'] : null;
        $this->container['innerRepoUserName'] = isset($data['innerRepoUserName']) ? $data['innerRepoUserName'] : null;
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
    * Gets status
    *  **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**: 仓库状态。 **取值范围**: active：正常。 delete：删除。 disabled：无效。 view：私有库浏览者。 trash：废弃。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**: 租户id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**: 租户id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**: 区域。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**: 区域。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets createdTime
    *  **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime **参数解释**: 创建时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param string|null $modifiedTime **参数解释**: 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets createdUserId
    *  **参数解释**: 创建人id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCreatedUserId()
    {
        return $this->container['createdUserId'];
    }

    /**
    * Sets createdUserId
    *
    * @param string|null $createdUserId **参数解释**: 创建人id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCreatedUserId($createdUserId)
    {
        $this->container['createdUserId'] = $createdUserId;
        return $this;
    }

    /**
    * Gets createdUserName
    *  **参数解释**: 创建人。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCreatedUserName()
    {
        return $this->container['createdUserName'];
    }

    /**
    * Sets createdUserName
    *
    * @param string|null $createdUserName **参数解释**: 创建人。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCreatedUserName($createdUserName)
    {
        $this->container['createdUserName'] = $createdUserName;
        return $this;
    }

    /**
    * Gets modifiedUserId
    *  **参数解释**: 修改人id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getModifiedUserId()
    {
        return $this->container['modifiedUserId'];
    }

    /**
    * Sets modifiedUserId
    *
    * @param string|null $modifiedUserId **参数解释**: 修改人id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->container['modifiedUserId'] = $modifiedUserId;
        return $this;
    }

    /**
    * Gets modifiedUserName
    *  **参数解释**: 修改人。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getModifiedUserName()
    {
        return $this->container['modifiedUserName'];
    }

    /**
    * Sets modifiedUserName
    *
    * @param string|null $modifiedUserName **参数解释**: 修改人。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setModifiedUserName($modifiedUserName)
    {
        $this->container['modifiedUserName'] = $modifiedUserName;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**: 用户id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**: 用户id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userType
    *  **参数解释**: 用户类型。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param string|null $userType **参数解释**: 用户类型。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**: enabled。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string|null $enabled **参数解释**: enabled。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets repoUserName
    *  **参数解释**: 仓库用户名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRepoUserName()
    {
        return $this->container['repoUserName'];
    }

    /**
    * Sets repoUserName
    *
    * @param string|null $repoUserName **参数解释**: 仓库用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRepoUserName($repoUserName)
    {
        $this->container['repoUserName'] = $repoUserName;
        return $this;
    }

    /**
    * Gets repoNumber
    *  **参数解释**: repo_number。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getRepoNumber()
    {
        return $this->container['repoNumber'];
    }

    /**
    * Sets repoNumber
    *
    * @param int|null $repoNumber **参数解释**: repo_number。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRepoNumber($repoNumber)
    {
        $this->container['repoNumber'] = $repoNumber;
        return $this;
    }

    /**
    * Gets innerRepoUserName
    *  **参数解释**: 内部仓库用户名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getInnerRepoUserName()
    {
        return $this->container['innerRepoUserName'];
    }

    /**
    * Sets innerRepoUserName
    *
    * @param string|null $innerRepoUserName **参数解释**: 内部仓库用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInnerRepoUserName($innerRepoUserName)
    {
        $this->container['innerRepoUserName'] = $innerRepoUserName;
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


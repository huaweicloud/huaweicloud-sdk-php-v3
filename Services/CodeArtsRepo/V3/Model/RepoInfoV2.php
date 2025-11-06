<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建时间
    * creatorName  创建者的用户名，在用户是租户的情况下，用户名和租户名相等
    * domainName  创建者的租户名
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228 )
    * httpsUrl  使用 https 克隆仓库时所使用的 url
    * iamUserUuid  用户的 iam user uuid
    * isOwner  当前用户是否是仓库的创建者，1：是，0：不是
    * lfsSize  仓库 LFS 容量，单位为M，大于 1024M 则单位为 G
    * projectIsDeleted  项目是否被删除
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryId  仓库主键id
    * repositoryName  仓库名
    * repositorySize  仓库总容量 = 仓库 LFS 容量 + git 库容量，单位为M，大于 1024M 则单位为 G
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * sshUrl  使用 ssh 方式克隆仓库时所使用的 url
    * star  当前用户是否收藏该仓库
    * status  仓库状态， 0：仓库正常创建成功 1：仓库创建中 2：创建失败 3：仓库冻结 4：仓库已经关闭
    * updatedAt  更新时间
    * userRole  用户在仓库中的权限:20：只读成员 30：普通成员 40：管理员
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 路径，访问它将跳转至仓库详情页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'creatorName' => 'string',
            'domainName' => 'string',
            'groupName' => 'string',
            'httpsUrl' => 'string',
            'iamUserUuid' => 'string',
            'isOwner' => 'int',
            'lfsSize' => 'string',
            'projectIsDeleted' => 'string',
            'projectUuid' => 'string',
            'repositoryId' => 'int',
            'repositoryName' => 'string',
            'repositorySize' => 'string',
            'repositoryUuid' => 'string',
            'sshUrl' => 'string',
            'star' => 'bool',
            'status' => 'int',
            'updatedAt' => 'string',
            'userRole' => 'int',
            'visibilityLevel' => 'int',
            'webUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建时间
    * creatorName  创建者的用户名，在用户是租户的情况下，用户名和租户名相等
    * domainName  创建者的租户名
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228 )
    * httpsUrl  使用 https 克隆仓库时所使用的 url
    * iamUserUuid  用户的 iam user uuid
    * isOwner  当前用户是否是仓库的创建者，1：是，0：不是
    * lfsSize  仓库 LFS 容量，单位为M，大于 1024M 则单位为 G
    * projectIsDeleted  项目是否被删除
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryId  仓库主键id
    * repositoryName  仓库名
    * repositorySize  仓库总容量 = 仓库 LFS 容量 + git 库容量，单位为M，大于 1024M 则单位为 G
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * sshUrl  使用 ssh 方式克隆仓库时所使用的 url
    * star  当前用户是否收藏该仓库
    * status  仓库状态， 0：仓库正常创建成功 1：仓库创建中 2：创建失败 3：仓库冻结 4：仓库已经关闭
    * updatedAt  更新时间
    * userRole  用户在仓库中的权限:20：只读成员 30：普通成员 40：管理员
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 路径，访问它将跳转至仓库详情页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'creatorName' => null,
        'domainName' => null,
        'groupName' => null,
        'httpsUrl' => null,
        'iamUserUuid' => null,
        'isOwner' => 'int32',
        'lfsSize' => null,
        'projectIsDeleted' => null,
        'projectUuid' => null,
        'repositoryId' => 'int32',
        'repositoryName' => null,
        'repositorySize' => null,
        'repositoryUuid' => null,
        'sshUrl' => null,
        'star' => null,
        'status' => 'int32',
        'updatedAt' => null,
        'userRole' => 'int32',
        'visibilityLevel' => 'int32',
        'webUrl' => null
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
    * createdAt  创建时间
    * creatorName  创建者的用户名，在用户是租户的情况下，用户名和租户名相等
    * domainName  创建者的租户名
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228 )
    * httpsUrl  使用 https 克隆仓库时所使用的 url
    * iamUserUuid  用户的 iam user uuid
    * isOwner  当前用户是否是仓库的创建者，1：是，0：不是
    * lfsSize  仓库 LFS 容量，单位为M，大于 1024M 则单位为 G
    * projectIsDeleted  项目是否被删除
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryId  仓库主键id
    * repositoryName  仓库名
    * repositorySize  仓库总容量 = 仓库 LFS 容量 + git 库容量，单位为M，大于 1024M 则单位为 G
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * sshUrl  使用 ssh 方式克隆仓库时所使用的 url
    * star  当前用户是否收藏该仓库
    * status  仓库状态， 0：仓库正常创建成功 1：仓库创建中 2：创建失败 3：仓库冻结 4：仓库已经关闭
    * updatedAt  更新时间
    * userRole  用户在仓库中的权限:20：只读成员 30：普通成员 40：管理员
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 路径，访问它将跳转至仓库详情页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'creatorName' => 'creator_name',
            'domainName' => 'domain_name',
            'groupName' => 'group_name',
            'httpsUrl' => 'https_url',
            'iamUserUuid' => 'iam_user_uuid',
            'isOwner' => 'is_owner',
            'lfsSize' => 'lfs_size',
            'projectIsDeleted' => 'project_is_deleted',
            'projectUuid' => 'project_uuid',
            'repositoryId' => 'repository_id',
            'repositoryName' => 'repository_name',
            'repositorySize' => 'repository_size',
            'repositoryUuid' => 'repository_uuid',
            'sshUrl' => 'ssh_url',
            'star' => 'star',
            'status' => 'status',
            'updatedAt' => 'updated_at',
            'userRole' => 'userRole',
            'visibilityLevel' => 'visibility_level',
            'webUrl' => 'web_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建时间
    * creatorName  创建者的用户名，在用户是租户的情况下，用户名和租户名相等
    * domainName  创建者的租户名
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228 )
    * httpsUrl  使用 https 克隆仓库时所使用的 url
    * iamUserUuid  用户的 iam user uuid
    * isOwner  当前用户是否是仓库的创建者，1：是，0：不是
    * lfsSize  仓库 LFS 容量，单位为M，大于 1024M 则单位为 G
    * projectIsDeleted  项目是否被删除
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryId  仓库主键id
    * repositoryName  仓库名
    * repositorySize  仓库总容量 = 仓库 LFS 容量 + git 库容量，单位为M，大于 1024M 则单位为 G
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * sshUrl  使用 ssh 方式克隆仓库时所使用的 url
    * star  当前用户是否收藏该仓库
    * status  仓库状态， 0：仓库正常创建成功 1：仓库创建中 2：创建失败 3：仓库冻结 4：仓库已经关闭
    * updatedAt  更新时间
    * userRole  用户在仓库中的权限:20：只读成员 30：普通成员 40：管理员
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 路径，访问它将跳转至仓库详情页
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'creatorName' => 'setCreatorName',
            'domainName' => 'setDomainName',
            'groupName' => 'setGroupName',
            'httpsUrl' => 'setHttpsUrl',
            'iamUserUuid' => 'setIamUserUuid',
            'isOwner' => 'setIsOwner',
            'lfsSize' => 'setLfsSize',
            'projectIsDeleted' => 'setProjectIsDeleted',
            'projectUuid' => 'setProjectUuid',
            'repositoryId' => 'setRepositoryId',
            'repositoryName' => 'setRepositoryName',
            'repositorySize' => 'setRepositorySize',
            'repositoryUuid' => 'setRepositoryUuid',
            'sshUrl' => 'setSshUrl',
            'star' => 'setStar',
            'status' => 'setStatus',
            'updatedAt' => 'setUpdatedAt',
            'userRole' => 'setUserRole',
            'visibilityLevel' => 'setVisibilityLevel',
            'webUrl' => 'setWebUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建时间
    * creatorName  创建者的用户名，在用户是租户的情况下，用户名和租户名相等
    * domainName  创建者的租户名
    * groupName  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228 )
    * httpsUrl  使用 https 克隆仓库时所使用的 url
    * iamUserUuid  用户的 iam user uuid
    * isOwner  当前用户是否是仓库的创建者，1：是，0：不是
    * lfsSize  仓库 LFS 容量，单位为M，大于 1024M 则单位为 G
    * projectIsDeleted  项目是否被删除
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * repositoryId  仓库主键id
    * repositoryName  仓库名
    * repositorySize  仓库总容量 = 仓库 LFS 容量 + git 库容量，单位为M，大于 1024M 则单位为 G
    * repositoryUuid  仓库uuid(由CreateRepository接口返回)
    * sshUrl  使用 ssh 方式克隆仓库时所使用的 url
    * star  当前用户是否收藏该仓库
    * status  仓库状态， 0：仓库正常创建成功 1：仓库创建中 2：创建失败 3：仓库冻结 4：仓库已经关闭
    * updatedAt  更新时间
    * userRole  用户在仓库中的权限:20：只读成员 30：普通成员 40：管理员
    * visibilityLevel  是否可见：0私有仓库，20公有仓库
    * webUrl  web url 路径，访问它将跳转至仓库详情页
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'creatorName' => 'getCreatorName',
            'domainName' => 'getDomainName',
            'groupName' => 'getGroupName',
            'httpsUrl' => 'getHttpsUrl',
            'iamUserUuid' => 'getIamUserUuid',
            'isOwner' => 'getIsOwner',
            'lfsSize' => 'getLfsSize',
            'projectIsDeleted' => 'getProjectIsDeleted',
            'projectUuid' => 'getProjectUuid',
            'repositoryId' => 'getRepositoryId',
            'repositoryName' => 'getRepositoryName',
            'repositorySize' => 'getRepositorySize',
            'repositoryUuid' => 'getRepositoryUuid',
            'sshUrl' => 'getSshUrl',
            'star' => 'getStar',
            'status' => 'getStatus',
            'updatedAt' => 'getUpdatedAt',
            'userRole' => 'getUserRole',
            'visibilityLevel' => 'getVisibilityLevel',
            'webUrl' => 'getWebUrl'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['httpsUrl'] = isset($data['httpsUrl']) ? $data['httpsUrl'] : null;
        $this->container['iamUserUuid'] = isset($data['iamUserUuid']) ? $data['iamUserUuid'] : null;
        $this->container['isOwner'] = isset($data['isOwner']) ? $data['isOwner'] : null;
        $this->container['lfsSize'] = isset($data['lfsSize']) ? $data['lfsSize'] : null;
        $this->container['projectIsDeleted'] = isset($data['projectIsDeleted']) ? $data['projectIsDeleted'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['repositorySize'] = isset($data['repositorySize']) ? $data['repositorySize'] : null;
        $this->container['repositoryUuid'] = isset($data['repositoryUuid']) ? $data['repositoryUuid'] : null;
        $this->container['sshUrl'] = isset($data['sshUrl']) ? $data['sshUrl'] : null;
        $this->container['star'] = isset($data['star']) ? $data['star'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['userRole'] = isset($data['userRole']) ? $data['userRole'] : null;
        $this->container['visibilityLevel'] = isset($data['visibilityLevel']) ? $data['visibilityLevel'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
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
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者的用户名，在用户是租户的情况下，用户名和租户名相等
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者的用户名，在用户是租户的情况下，用户名和租户名相等
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets domainName
    *  创建者的租户名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 创建者的租户名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets groupName
    *  仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228 )
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 仓库组名(克隆地址中域名后面仓库名前的一段 示例：git@repo.alpha.devcloud.inhuawei.com:Demo00228/testword.git  组名：Demo00228 )
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets httpsUrl
    *  使用 https 克隆仓库时所使用的 url
    *
    * @return string|null
    */
    public function getHttpsUrl()
    {
        return $this->container['httpsUrl'];
    }

    /**
    * Sets httpsUrl
    *
    * @param string|null $httpsUrl 使用 https 克隆仓库时所使用的 url
    *
    * @return $this
    */
    public function setHttpsUrl($httpsUrl)
    {
        $this->container['httpsUrl'] = $httpsUrl;
        return $this;
    }

    /**
    * Gets iamUserUuid
    *  用户的 iam user uuid
    *
    * @return string|null
    */
    public function getIamUserUuid()
    {
        return $this->container['iamUserUuid'];
    }

    /**
    * Sets iamUserUuid
    *
    * @param string|null $iamUserUuid 用户的 iam user uuid
    *
    * @return $this
    */
    public function setIamUserUuid($iamUserUuid)
    {
        $this->container['iamUserUuid'] = $iamUserUuid;
        return $this;
    }

    /**
    * Gets isOwner
    *  当前用户是否是仓库的创建者，1：是，0：不是
    *
    * @return int|null
    */
    public function getIsOwner()
    {
        return $this->container['isOwner'];
    }

    /**
    * Sets isOwner
    *
    * @param int|null $isOwner 当前用户是否是仓库的创建者，1：是，0：不是
    *
    * @return $this
    */
    public function setIsOwner($isOwner)
    {
        $this->container['isOwner'] = $isOwner;
        return $this;
    }

    /**
    * Gets lfsSize
    *  仓库 LFS 容量，单位为M，大于 1024M 则单位为 G
    *
    * @return string|null
    */
    public function getLfsSize()
    {
        return $this->container['lfsSize'];
    }

    /**
    * Sets lfsSize
    *
    * @param string|null $lfsSize 仓库 LFS 容量，单位为M，大于 1024M 则单位为 G
    *
    * @return $this
    */
    public function setLfsSize($lfsSize)
    {
        $this->container['lfsSize'] = $lfsSize;
        return $this;
    }

    /**
    * Gets projectIsDeleted
    *  项目是否被删除
    *
    * @return string|null
    */
    public function getProjectIsDeleted()
    {
        return $this->container['projectIsDeleted'];
    }

    /**
    * Sets projectIsDeleted
    *
    * @param string|null $projectIsDeleted 项目是否被删除
    *
    * @return $this
    */
    public function setProjectIsDeleted($projectIsDeleted)
    {
        $this->container['projectIsDeleted'] = $projectIsDeleted;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets repositoryId
    *  仓库主键id
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId 仓库主键id
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets repositoryName
    *  仓库名
    *
    * @return string|null
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string|null $repositoryName 仓库名
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets repositorySize
    *  仓库总容量 = 仓库 LFS 容量 + git 库容量，单位为M，大于 1024M 则单位为 G
    *
    * @return string|null
    */
    public function getRepositorySize()
    {
        return $this->container['repositorySize'];
    }

    /**
    * Sets repositorySize
    *
    * @param string|null $repositorySize 仓库总容量 = 仓库 LFS 容量 + git 库容量，单位为M，大于 1024M 则单位为 G
    *
    * @return $this
    */
    public function setRepositorySize($repositorySize)
    {
        $this->container['repositorySize'] = $repositorySize;
        return $this;
    }

    /**
    * Gets repositoryUuid
    *  仓库uuid(由CreateRepository接口返回)
    *
    * @return string|null
    */
    public function getRepositoryUuid()
    {
        return $this->container['repositoryUuid'];
    }

    /**
    * Sets repositoryUuid
    *
    * @param string|null $repositoryUuid 仓库uuid(由CreateRepository接口返回)
    *
    * @return $this
    */
    public function setRepositoryUuid($repositoryUuid)
    {
        $this->container['repositoryUuid'] = $repositoryUuid;
        return $this;
    }

    /**
    * Gets sshUrl
    *  使用 ssh 方式克隆仓库时所使用的 url
    *
    * @return string|null
    */
    public function getSshUrl()
    {
        return $this->container['sshUrl'];
    }

    /**
    * Sets sshUrl
    *
    * @param string|null $sshUrl 使用 ssh 方式克隆仓库时所使用的 url
    *
    * @return $this
    */
    public function setSshUrl($sshUrl)
    {
        $this->container['sshUrl'] = $sshUrl;
        return $this;
    }

    /**
    * Gets star
    *  当前用户是否收藏该仓库
    *
    * @return bool|null
    */
    public function getStar()
    {
        return $this->container['star'];
    }

    /**
    * Sets star
    *
    * @param bool|null $star 当前用户是否收藏该仓库
    *
    * @return $this
    */
    public function setStar($star)
    {
        $this->container['star'] = $star;
        return $this;
    }

    /**
    * Gets status
    *  仓库状态， 0：仓库正常创建成功 1：仓库创建中 2：创建失败 3：仓库冻结 4：仓库已经关闭
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 仓库状态， 0：仓库正常创建成功 1：仓库创建中 2：创建失败 3：仓库冻结 4：仓库已经关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets userRole
    *  用户在仓库中的权限:20：只读成员 30：普通成员 40：管理员
    *
    * @return int|null
    */
    public function getUserRole()
    {
        return $this->container['userRole'];
    }

    /**
    * Sets userRole
    *
    * @param int|null $userRole 用户在仓库中的权限:20：只读成员 30：普通成员 40：管理员
    *
    * @return $this
    */
    public function setUserRole($userRole)
    {
        $this->container['userRole'] = $userRole;
        return $this;
    }

    /**
    * Gets visibilityLevel
    *  是否可见：0私有仓库，20公有仓库
    *
    * @return int|null
    */
    public function getVisibilityLevel()
    {
        return $this->container['visibilityLevel'];
    }

    /**
    * Sets visibilityLevel
    *
    * @param int|null $visibilityLevel 是否可见：0私有仓库，20公有仓库
    *
    * @return $this
    */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->container['visibilityLevel'] = $visibilityLevel;
        return $this;
    }

    /**
    * Gets webUrl
    *  web url 路径，访问它将跳转至仓库详情页
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl web url 路径，访问它将跳转至仓库详情页
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
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


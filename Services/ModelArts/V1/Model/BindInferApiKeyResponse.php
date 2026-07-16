<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindInferApiKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindInferApiKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  **参数解释：** api-key的ID，在[创建API_KEY](CreateInferApiKey.xml)时即可在返回体中获取，也可通过[查询api-keys列表](ListInferApiKeys.xml)获取当前用户拥有的api-key，其中id字段即为api-key的ID。 **取值范围：** UUID格式。
    * name  **参数解释：** api-key的名称，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。
    * description  **参数解释：** api-key的描述，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-256个字符，可以包含字母、汉字、数字、连字符和下划线。
    * createTime  **参数解释：** api-key的创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * scope  **参数解释：** api-key生效范围。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。
    * domainId  **参数解释：** 用户domain ID。获取方法请参见[获取账号名和账号ID](modelarts_03_0148.xml)。 **取值范围：** 账号ID。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](tag:hws,hws_hk,fcs,fcs_super)[获取资源空间ID和名称](tag:hcs,hcs_sm)](modelarts_03_0147.xml)。 **取值范围：** 账号的项目ID。
    * services  **参数解释：** 绑定此api-key的在线服务列表。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** 工作空间ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'scope' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'services' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServiceIdName[]',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  **参数解释：** api-key的ID，在[创建API_KEY](CreateInferApiKey.xml)时即可在返回体中获取，也可通过[查询api-keys列表](ListInferApiKeys.xml)获取当前用户拥有的api-key，其中id字段即为api-key的ID。 **取值范围：** UUID格式。
    * name  **参数解释：** api-key的名称，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。
    * description  **参数解释：** api-key的描述，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-256个字符，可以包含字母、汉字、数字、连字符和下划线。
    * createTime  **参数解释：** api-key的创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * scope  **参数解释：** api-key生效范围。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。
    * domainId  **参数解释：** 用户domain ID。获取方法请参见[获取账号名和账号ID](modelarts_03_0148.xml)。 **取值范围：** 账号ID。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](tag:hws,hws_hk,fcs,fcs_super)[获取资源空间ID和名称](tag:hcs,hcs_sm)](modelarts_03_0147.xml)。 **取值范围：** 账号的项目ID。
    * services  **参数解释：** 绑定此api-key的在线服务列表。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** 工作空间ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'name' => null,
        'description' => null,
        'createTime' => 'int64',
        'scope' => null,
        'domainId' => null,
        'projectId' => null,
        'services' => null,
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
    * keyId  **参数解释：** api-key的ID，在[创建API_KEY](CreateInferApiKey.xml)时即可在返回体中获取，也可通过[查询api-keys列表](ListInferApiKeys.xml)获取当前用户拥有的api-key，其中id字段即为api-key的ID。 **取值范围：** UUID格式。
    * name  **参数解释：** api-key的名称，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。
    * description  **参数解释：** api-key的描述，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-256个字符，可以包含字母、汉字、数字、连字符和下划线。
    * createTime  **参数解释：** api-key的创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * scope  **参数解释：** api-key生效范围。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。
    * domainId  **参数解释：** 用户domain ID。获取方法请参见[获取账号名和账号ID](modelarts_03_0148.xml)。 **取值范围：** 账号ID。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](tag:hws,hws_hk,fcs,fcs_super)[获取资源空间ID和名称](tag:hcs,hcs_sm)](modelarts_03_0147.xml)。 **取值范围：** 账号的项目ID。
    * services  **参数解释：** 绑定此api-key的在线服务列表。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** 工作空间ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'name' => 'name',
            'description' => 'description',
            'createTime' => 'create_time',
            'scope' => 'scope',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'services' => 'services',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  **参数解释：** api-key的ID，在[创建API_KEY](CreateInferApiKey.xml)时即可在返回体中获取，也可通过[查询api-keys列表](ListInferApiKeys.xml)获取当前用户拥有的api-key，其中id字段即为api-key的ID。 **取值范围：** UUID格式。
    * name  **参数解释：** api-key的名称，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。
    * description  **参数解释：** api-key的描述，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-256个字符，可以包含字母、汉字、数字、连字符和下划线。
    * createTime  **参数解释：** api-key的创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * scope  **参数解释：** api-key生效范围。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。
    * domainId  **参数解释：** 用户domain ID。获取方法请参见[获取账号名和账号ID](modelarts_03_0148.xml)。 **取值范围：** 账号ID。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](tag:hws,hws_hk,fcs,fcs_super)[获取资源空间ID和名称](tag:hcs,hcs_sm)](modelarts_03_0147.xml)。 **取值范围：** 账号的项目ID。
    * services  **参数解释：** 绑定此api-key的在线服务列表。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** 工作空间ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'name' => 'setName',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'scope' => 'setScope',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'services' => 'setServices',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  **参数解释：** api-key的ID，在[创建API_KEY](CreateInferApiKey.xml)时即可在返回体中获取，也可通过[查询api-keys列表](ListInferApiKeys.xml)获取当前用户拥有的api-key，其中id字段即为api-key的ID。 **取值范围：** UUID格式。
    * name  **参数解释：** api-key的名称，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。
    * description  **参数解释：** api-key的描述，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-256个字符，可以包含字母、汉字、数字、连字符和下划线。
    * createTime  **参数解释：** api-key的创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    * scope  **参数解释：** api-key生效范围。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。
    * domainId  **参数解释：** 用户domain ID。获取方法请参见[获取账号名和账号ID](modelarts_03_0148.xml)。 **取值范围：** 账号ID。
    * projectId  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](tag:hws,hws_hk,fcs,fcs_super)[获取资源空间ID和名称](tag:hcs,hcs_sm)](modelarts_03_0147.xml)。 **取值范围：** 账号的项目ID。
    * services  **参数解释：** 绑定此api-key的在线服务列表。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** 工作空间ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'name' => 'getName',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'scope' => 'getScope',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'services' => 'getServices',
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
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
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) > 64)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) < 1)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
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
    * Gets keyId
    *  **参数解释：** api-key的ID，在[创建API_KEY](CreateInferApiKey.xml)时即可在返回体中获取，也可通过[查询api-keys列表](ListInferApiKeys.xml)获取当前用户拥有的api-key，其中id字段即为api-key的ID。 **取值范围：** UUID格式。
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId **参数解释：** api-key的ID，在[创建API_KEY](CreateInferApiKey.xml)时即可在返回体中获取，也可通过[查询api-keys列表](ListInferApiKeys.xml)获取当前用户拥有的api-key，其中id字段即为api-key的ID。 **取值范围：** UUID格式。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** api-key的名称，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** api-key的名称，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-64个字符，可以包含字母、汉字、数字、连字符和下划线。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** api-key的描述，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-256个字符，可以包含字母、汉字、数字、连字符和下划线。
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
    * @param string|null $description **参数解释：** api-key的描述，在[创建API_KEY](CreateInferApiKey.xml)时自定义。 **取值范围：** 支持1-256个字符，可以包含字母、汉字、数字、连字符和下划线。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** api-key的创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释：** api-key的创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字，如1609459200000。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释：** api-key生效范围。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope **参数解释：** api-key生效范围。 **取值范围：** - USER：表示生效范围为用户级别，可以访问该用户创建的所有在线服务。 - SERVICE：表示生效范围为单个服务，可以访问绑定该api-key的在线服务。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 用户domain ID。获取方法请参见[获取账号名和账号ID](modelarts_03_0148.xml)。 **取值范围：** 账号ID。
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
    * @param string|null $domainId **参数解释：** 用户domain ID。获取方法请参见[获取账号名和账号ID](modelarts_03_0148.xml)。 **取值范围：** 账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](tag:hws,hws_hk,fcs,fcs_super)[获取资源空间ID和名称](tag:hcs,hcs_sm)](modelarts_03_0147.xml)。 **取值范围：** 账号的项目ID。
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
    * @param string|null $projectId **参数解释：** [用户项目ID](tag:hws,hws_hk,fcs,fcs_super)[资源空间ID](tag:hcs,hcs_sm)。获取方法请参见[[获取项目ID和名称](tag:hws,hws_hk,fcs,fcs_super)[获取资源空间ID和名称](tag:hcs,hcs_sm)](modelarts_03_0147.xml)。 **取值范围：** 账号的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets services
    *  **参数解释：** 绑定此api-key的在线服务列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceIdName[]|null
    */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
    * Sets services
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServiceIdName[]|null $services **参数解释：** 绑定此api-key的在线服务列表。
    *
    * @return $this
    */
    public function setServices($services)
    {
        $this->container['services'] = $services;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间ID。 **取值范围：** 工作空间ID。
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
    * @param string|null $workspaceId **参数解释：** 工作空间ID。 **取值范围：** 工作空间ID。
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


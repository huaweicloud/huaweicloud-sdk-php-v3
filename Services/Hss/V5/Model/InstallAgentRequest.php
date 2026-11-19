<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstallAgentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstallAgentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * rootPermission  **参数解释**: 是否允许root直连 **约束限制**: 不涉及 **取值范围**: - true：允许 - false：不允许  **默认取值**: 不涉及
    * rootPassword  **参数解释**: root密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginUser  **参数解释**: 登录用户 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPort  **参数解释**: 登录端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器id列表,有多个hostId的时使用逗号拼接 **约束限制**: 不涉及 **取值范围**: 字符长度0-3200 **默认取值**: 不涉及
    * file  密码或者密钥模板文件
    * loginType  **参数解释**: 登录类型 **约束限制**: 不涉及 **取值范围**: - single_password - single_sshKey - dew - ssh_key - password  **默认取值**: 不涉及
    * hostGroupId  **参数解释**: 服务器组id **约束限制**: 不涉及 **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'rootPermission' => 'string',
            'rootPassword' => 'string',
            'loginUser' => 'string',
            'loginPassword' => 'string',
            'loginPort' => 'int',
            'hostIdList' => 'string',
            'file' => '\HuaweiCloud\SDK\Hss\V5\Model\MultipartFile[]',
            'loginType' => 'string',
            'hostGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * rootPermission  **参数解释**: 是否允许root直连 **约束限制**: 不涉及 **取值范围**: - true：允许 - false：不允许  **默认取值**: 不涉及
    * rootPassword  **参数解释**: root密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginUser  **参数解释**: 登录用户 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPort  **参数解释**: 登录端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器id列表,有多个hostId的时使用逗号拼接 **约束限制**: 不涉及 **取值范围**: 字符长度0-3200 **默认取值**: 不涉及
    * file  密码或者密钥模板文件
    * loginType  **参数解释**: 登录类型 **约束限制**: 不涉及 **取值范围**: - single_password - single_sshKey - dew - ssh_key - password  **默认取值**: 不涉及
    * hostGroupId  **参数解释**: 服务器组id **约束限制**: 不涉及 **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'rootPermission' => null,
        'rootPassword' => null,
        'loginUser' => null,
        'loginPassword' => null,
        'loginPort' => 'int32',
        'hostIdList' => null,
        'file' => null,
        'loginType' => null,
        'hostGroupId' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * rootPermission  **参数解释**: 是否允许root直连 **约束限制**: 不涉及 **取值范围**: - true：允许 - false：不允许  **默认取值**: 不涉及
    * rootPassword  **参数解释**: root密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginUser  **参数解释**: 登录用户 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPort  **参数解释**: 登录端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器id列表,有多个hostId的时使用逗号拼接 **约束限制**: 不涉及 **取值范围**: 字符长度0-3200 **默认取值**: 不涉及
    * file  密码或者密钥模板文件
    * loginType  **参数解释**: 登录类型 **约束限制**: 不涉及 **取值范围**: - single_password - single_sshKey - dew - ssh_key - password  **默认取值**: 不涉及
    * hostGroupId  **参数解释**: 服务器组id **约束限制**: 不涉及 **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'rootPermission' => 'root_permission',
            'rootPassword' => 'root_password',
            'loginUser' => 'login_user',
            'loginPassword' => 'login_password',
            'loginPort' => 'login_port',
            'hostIdList' => 'host_id_list',
            'file' => 'file',
            'loginType' => 'login_type',
            'hostGroupId' => 'host_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * rootPermission  **参数解释**: 是否允许root直连 **约束限制**: 不涉及 **取值范围**: - true：允许 - false：不允许  **默认取值**: 不涉及
    * rootPassword  **参数解释**: root密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginUser  **参数解释**: 登录用户 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPort  **参数解释**: 登录端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器id列表,有多个hostId的时使用逗号拼接 **约束限制**: 不涉及 **取值范围**: 字符长度0-3200 **默认取值**: 不涉及
    * file  密码或者密钥模板文件
    * loginType  **参数解释**: 登录类型 **约束限制**: 不涉及 **取值范围**: - single_password - single_sshKey - dew - ssh_key - password  **默认取值**: 不涉及
    * hostGroupId  **参数解释**: 服务器组id **约束限制**: 不涉及 **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'rootPermission' => 'setRootPermission',
            'rootPassword' => 'setRootPassword',
            'loginUser' => 'setLoginUser',
            'loginPassword' => 'setLoginPassword',
            'loginPort' => 'setLoginPort',
            'hostIdList' => 'setHostIdList',
            'file' => 'setFile',
            'loginType' => 'setLoginType',
            'hostGroupId' => 'setHostGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * rootPermission  **参数解释**: 是否允许root直连 **约束限制**: 不涉及 **取值范围**: - true：允许 - false：不允许  **默认取值**: 不涉及
    * rootPassword  **参数解释**: root密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginUser  **参数解释**: 登录用户 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPassword  **参数解释**: 登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * loginPort  **参数解释**: 登录端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器id列表,有多个hostId的时使用逗号拼接 **约束限制**: 不涉及 **取值范围**: 字符长度0-3200 **默认取值**: 不涉及
    * file  密码或者密钥模板文件
    * loginType  **参数解释**: 登录类型 **约束限制**: 不涉及 **取值范围**: - single_password - single_sshKey - dew - ssh_key - password  **默认取值**: 不涉及
    * hostGroupId  **参数解释**: 服务器组id **约束限制**: 不涉及 **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'rootPermission' => 'getRootPermission',
            'rootPassword' => 'getRootPassword',
            'loginUser' => 'getLoginUser',
            'loginPassword' => 'getLoginPassword',
            'loginPort' => 'getLoginPort',
            'hostIdList' => 'getHostIdList',
            'file' => 'getFile',
            'loginType' => 'getLoginType',
            'hostGroupId' => 'getHostGroupId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['rootPermission'] = isset($data['rootPermission']) ? $data['rootPermission'] : null;
        $this->container['rootPassword'] = isset($data['rootPassword']) ? $data['rootPassword'] : null;
        $this->container['loginUser'] = isset($data['loginUser']) ? $data['loginUser'] : null;
        $this->container['loginPassword'] = isset($data['loginPassword']) ? $data['loginPassword'] : null;
        $this->container['loginPort'] = isset($data['loginPort']) ? $data['loginPort'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['loginType'] = isset($data['loginType']) ? $data['loginType'] : null;
        $this->container['hostGroupId'] = isset($data['hostGroupId']) ? $data['hostGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['rootPermission']) && (mb_strlen($this->container['rootPermission']) > 16)) {
                $invalidProperties[] = "invalid value for 'rootPermission', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['rootPermission']) && (mb_strlen($this->container['rootPermission']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootPermission', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootPassword']) && (mb_strlen($this->container['rootPassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'rootPassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['rootPassword']) && (mb_strlen($this->container['rootPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootPassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loginUser']) && (mb_strlen($this->container['loginUser']) > 256)) {
                $invalidProperties[] = "invalid value for 'loginUser', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['loginUser']) && (mb_strlen($this->container['loginUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'loginUser', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loginPassword']) && (mb_strlen($this->container['loginPassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'loginPassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['loginPassword']) && (mb_strlen($this->container['loginPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'loginPassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loginPort']) && ($this->container['loginPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'loginPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['loginPort']) && ($this->container['loginPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'loginPort', must be bigger than or equal to 0.";
            }
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
        }
            if ((mb_strlen($this->container['hostIdList']) > 3200)) {
                $invalidProperties[] = "invalid value for 'hostIdList', the character length must be smaller than or equal to 3200.";
            }
            if ((mb_strlen($this->container['hostIdList']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIdList', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['loginType'] === null) {
            $invalidProperties[] = "'loginType' can't be null";
        }
            if ((mb_strlen($this->container['loginType']) > 64)) {
                $invalidProperties[] = "invalid value for 'loginType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['loginType']) < 0)) {
                $invalidProperties[] = "invalid value for 'loginType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostGroupId']) && (mb_strlen($this->container['hostGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostGroupId']) && (mb_strlen($this->container['hostGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostGroupId', the character length must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets rootPermission
    *  **参数解释**: 是否允许root直连 **约束限制**: 不涉及 **取值范围**: - true：允许 - false：不允许  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRootPermission()
    {
        return $this->container['rootPermission'];
    }

    /**
    * Sets rootPermission
    *
    * @param string|null $rootPermission **参数解释**: 是否允许root直连 **约束限制**: 不涉及 **取值范围**: - true：允许 - false：不允许  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRootPermission($rootPermission)
    {
        $this->container['rootPermission'] = $rootPermission;
        return $this;
    }

    /**
    * Gets rootPassword
    *  **参数解释**: root密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRootPassword()
    {
        return $this->container['rootPassword'];
    }

    /**
    * Sets rootPassword
    *
    * @param string|null $rootPassword **参数解释**: root密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRootPassword($rootPassword)
    {
        $this->container['rootPassword'] = $rootPassword;
        return $this;
    }

    /**
    * Gets loginUser
    *  **参数解释**: 登录用户 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLoginUser()
    {
        return $this->container['loginUser'];
    }

    /**
    * Sets loginUser
    *
    * @param string|null $loginUser **参数解释**: 登录用户 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginUser($loginUser)
    {
        $this->container['loginUser'] = $loginUser;
        return $this;
    }

    /**
    * Gets loginPassword
    *  **参数解释**: 登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLoginPassword()
    {
        return $this->container['loginPassword'];
    }

    /**
    * Sets loginPassword
    *
    * @param string|null $loginPassword **参数解释**: 登录密码 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginPassword($loginPassword)
    {
        $this->container['loginPassword'] = $loginPassword;
        return $this;
    }

    /**
    * Gets loginPort
    *  **参数解释**: 登录端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getLoginPort()
    {
        return $this->container['loginPort'];
    }

    /**
    * Sets loginPort
    *
    * @param int|null $loginPort **参数解释**: 登录端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginPort($loginPort)
    {
        $this->container['loginPort'] = $loginPort;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 服务器id列表,有多个hostId的时使用逗号拼接 **约束限制**: 不涉及 **取值范围**: 字符长度0-3200 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string $hostIdList **参数解释**: 服务器id列表,有多个hostId的时使用逗号拼接 **约束限制**: 不涉及 **取值范围**: 字符长度0-3200 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets file
    *  密码或者密钥模板文件
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\MultipartFile[]|null
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\MultipartFile[]|null $file 密码或者密钥模板文件
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets loginType
    *  **参数解释**: 登录类型 **约束限制**: 不涉及 **取值范围**: - single_password - single_sshKey - dew - ssh_key - password  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getLoginType()
    {
        return $this->container['loginType'];
    }

    /**
    * Sets loginType
    *
    * @param string $loginType **参数解释**: 登录类型 **约束限制**: 不涉及 **取值范围**: - single_password - single_sshKey - dew - ssh_key - password  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginType($loginType)
    {
        $this->container['loginType'] = $loginType;
        return $this;
    }

    /**
    * Gets hostGroupId
    *  **参数解释**: 服务器组id **约束限制**: 不涉及 **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostGroupId()
    {
        return $this->container['hostGroupId'];
    }

    /**
    * Sets hostGroupId
    *
    * @param string|null $hostGroupId **参数解释**: 服务器组id **约束限制**: 不涉及 **取值范围**: 字符长度0-128 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostGroupId($hostGroupId)
    {
        $this->container['hostGroupId'] = $hostGroupId;
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


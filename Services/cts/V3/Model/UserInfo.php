<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * name  用户名称。
    * userName  用户名称。
    * domain  domain
    * accountId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * accessKeyId  访问密钥ID。
    * principalUrn  操作用户身份的 URN。 如果是 IAM 用户身份，格式如 iam::<account-id>:user:<user-name>。 如果是 IAM 委托会话 身份，格式如 sts::<account-id>:assumed-agency:<agency-name>/<agency-session-name>。 如果是 IAM 联邦身份，格式如 sts::<account-id>:external-user:<idp_id>/<user-session-name>。
    * principalId  操作用户身份Id。 - 如果是 IAM 用户身份，格式为 <user-id>。 - 如果是 IAM 委托会话身份，格式为 <agency-id>:<agency-session-name>。 - 如果是 IAM 联邦身份，格式为 <idp_id>:<user-session-name>
    * principalIsRootUser  是否是根用户。 - 值为“true”时，表示操作者是根用户。 - 值为“false”时，表示操作者是委托会话身份、联邦身份或非根用户的 IAM 用户。
    * type  操作者身份类型。
    * invokedBy  发出请求的服务的名称。控制台操作时为[\"service.console\" ]
    * sessionContext  sessionContext
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'userName' => 'string',
            'domain' => '\HuaweiCloud\SDK\Cts\V3\Model\BaseUser',
            'accountId' => 'string',
            'accessKeyId' => 'string',
            'principalUrn' => 'string',
            'principalId' => 'string',
            'principalIsRootUser' => 'string',
            'type' => 'string',
            'invokedBy' => 'string[]',
            'sessionContext' => '\HuaweiCloud\SDK\Cts\V3\Model\SessionContext'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * name  用户名称。
    * userName  用户名称。
    * domain  domain
    * accountId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * accessKeyId  访问密钥ID。
    * principalUrn  操作用户身份的 URN。 如果是 IAM 用户身份，格式如 iam::<account-id>:user:<user-name>。 如果是 IAM 委托会话 身份，格式如 sts::<account-id>:assumed-agency:<agency-name>/<agency-session-name>。 如果是 IAM 联邦身份，格式如 sts::<account-id>:external-user:<idp_id>/<user-session-name>。
    * principalId  操作用户身份Id。 - 如果是 IAM 用户身份，格式为 <user-id>。 - 如果是 IAM 委托会话身份，格式为 <agency-id>:<agency-session-name>。 - 如果是 IAM 联邦身份，格式为 <idp_id>:<user-session-name>
    * principalIsRootUser  是否是根用户。 - 值为“true”时，表示操作者是根用户。 - 值为“false”时，表示操作者是委托会话身份、联邦身份或非根用户的 IAM 用户。
    * type  操作者身份类型。
    * invokedBy  发出请求的服务的名称。控制台操作时为[\"service.console\" ]
    * sessionContext  sessionContext
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'userName' => null,
        'domain' => null,
        'accountId' => null,
        'accessKeyId' => null,
        'principalUrn' => null,
        'principalId' => null,
        'principalIsRootUser' => null,
        'type' => null,
        'invokedBy' => null,
        'sessionContext' => null
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
    * id  用户ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * name  用户名称。
    * userName  用户名称。
    * domain  domain
    * accountId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * accessKeyId  访问密钥ID。
    * principalUrn  操作用户身份的 URN。 如果是 IAM 用户身份，格式如 iam::<account-id>:user:<user-name>。 如果是 IAM 委托会话 身份，格式如 sts::<account-id>:assumed-agency:<agency-name>/<agency-session-name>。 如果是 IAM 联邦身份，格式如 sts::<account-id>:external-user:<idp_id>/<user-session-name>。
    * principalId  操作用户身份Id。 - 如果是 IAM 用户身份，格式为 <user-id>。 - 如果是 IAM 委托会话身份，格式为 <agency-id>:<agency-session-name>。 - 如果是 IAM 联邦身份，格式为 <idp_id>:<user-session-name>
    * principalIsRootUser  是否是根用户。 - 值为“true”时，表示操作者是根用户。 - 值为“false”时，表示操作者是委托会话身份、联邦身份或非根用户的 IAM 用户。
    * type  操作者身份类型。
    * invokedBy  发出请求的服务的名称。控制台操作时为[\"service.console\" ]
    * sessionContext  sessionContext
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'userName' => 'user_name',
            'domain' => 'domain',
            'accountId' => 'account_id',
            'accessKeyId' => 'access_key_id',
            'principalUrn' => 'principal_urn',
            'principalId' => 'principal_id',
            'principalIsRootUser' => 'principal_is_root_user',
            'type' => 'type',
            'invokedBy' => 'invoked_by',
            'sessionContext' => 'session_context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * name  用户名称。
    * userName  用户名称。
    * domain  domain
    * accountId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * accessKeyId  访问密钥ID。
    * principalUrn  操作用户身份的 URN。 如果是 IAM 用户身份，格式如 iam::<account-id>:user:<user-name>。 如果是 IAM 委托会话 身份，格式如 sts::<account-id>:assumed-agency:<agency-name>/<agency-session-name>。 如果是 IAM 联邦身份，格式如 sts::<account-id>:external-user:<idp_id>/<user-session-name>。
    * principalId  操作用户身份Id。 - 如果是 IAM 用户身份，格式为 <user-id>。 - 如果是 IAM 委托会话身份，格式为 <agency-id>:<agency-session-name>。 - 如果是 IAM 联邦身份，格式为 <idp_id>:<user-session-name>
    * principalIsRootUser  是否是根用户。 - 值为“true”时，表示操作者是根用户。 - 值为“false”时，表示操作者是委托会话身份、联邦身份或非根用户的 IAM 用户。
    * type  操作者身份类型。
    * invokedBy  发出请求的服务的名称。控制台操作时为[\"service.console\" ]
    * sessionContext  sessionContext
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'userName' => 'setUserName',
            'domain' => 'setDomain',
            'accountId' => 'setAccountId',
            'accessKeyId' => 'setAccessKeyId',
            'principalUrn' => 'setPrincipalUrn',
            'principalId' => 'setPrincipalId',
            'principalIsRootUser' => 'setPrincipalIsRootUser',
            'type' => 'setType',
            'invokedBy' => 'setInvokedBy',
            'sessionContext' => 'setSessionContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * name  用户名称。
    * userName  用户名称。
    * domain  domain
    * accountId  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    * accessKeyId  访问密钥ID。
    * principalUrn  操作用户身份的 URN。 如果是 IAM 用户身份，格式如 iam::<account-id>:user:<user-name>。 如果是 IAM 委托会话 身份，格式如 sts::<account-id>:assumed-agency:<agency-name>/<agency-session-name>。 如果是 IAM 联邦身份，格式如 sts::<account-id>:external-user:<idp_id>/<user-session-name>。
    * principalId  操作用户身份Id。 - 如果是 IAM 用户身份，格式为 <user-id>。 - 如果是 IAM 委托会话身份，格式为 <agency-id>:<agency-session-name>。 - 如果是 IAM 联邦身份，格式为 <idp_id>:<user-session-name>
    * principalIsRootUser  是否是根用户。 - 值为“true”时，表示操作者是根用户。 - 值为“false”时，表示操作者是委托会话身份、联邦身份或非根用户的 IAM 用户。
    * type  操作者身份类型。
    * invokedBy  发出请求的服务的名称。控制台操作时为[\"service.console\" ]
    * sessionContext  sessionContext
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'userName' => 'getUserName',
            'domain' => 'getDomain',
            'accountId' => 'getAccountId',
            'accessKeyId' => 'getAccessKeyId',
            'principalUrn' => 'getPrincipalUrn',
            'principalId' => 'getPrincipalId',
            'principalIsRootUser' => 'getPrincipalIsRootUser',
            'type' => 'getType',
            'invokedBy' => 'getInvokedBy',
            'sessionContext' => 'getSessionContext'
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
    const PRINCIPAL_IS_ROOT_USER_TRUE = 'true';
    const PRINCIPAL_IS_ROOT_USER_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrincipalIsRootUserAllowableValues()
    {
        return [
            self::PRINCIPAL_IS_ROOT_USER_TRUE,
            self::PRINCIPAL_IS_ROOT_USER_FALSE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accessKeyId'] = isset($data['accessKeyId']) ? $data['accessKeyId'] : null;
        $this->container['principalUrn'] = isset($data['principalUrn']) ? $data['principalUrn'] : null;
        $this->container['principalId'] = isset($data['principalId']) ? $data['principalId'] : null;
        $this->container['principalIsRootUser'] = isset($data['principalIsRootUser']) ? $data['principalIsRootUser'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['invokedBy'] = isset($data['invokedBy']) ? $data['invokedBy'] : null;
        $this->container['sessionContext'] = isset($data['sessionContext']) ? $data['sessionContext'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 40)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 15)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 300)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 300)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 40)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 15)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['accessKeyId']) && (mb_strlen($this->container['accessKeyId']) > 40)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['accessKeyId']) && (mb_strlen($this->container['accessKeyId']) < 15)) {
                $invalidProperties[] = "invalid value for 'accessKeyId', the character length must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['principalUrn']) && (mb_strlen($this->container['principalUrn']) > 100)) {
                $invalidProperties[] = "invalid value for 'principalUrn', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['principalUrn']) && (mb_strlen($this->container['principalUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'principalUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['principalId']) && (mb_strlen($this->container['principalId']) > 100)) {
                $invalidProperties[] = "invalid value for 'principalId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['principalId']) && (mb_strlen($this->container['principalId']) < 0)) {
                $invalidProperties[] = "invalid value for 'principalId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPrincipalIsRootUserAllowableValues();
                if (!is_null($this->container['principalIsRootUser']) && !in_array($this->container['principalIsRootUser'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'principalIsRootUser', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['principalIsRootUser']) && (mb_strlen($this->container['principalIsRootUser']) > 10)) {
                $invalidProperties[] = "invalid value for 'principalIsRootUser', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['principalIsRootUser']) && (mb_strlen($this->container['principalIsRootUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'principalIsRootUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 30)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  用户ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 用户ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  用户名称。
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
    * @param string|null $name 用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称。
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
    * @param string|null $userName 用户名称。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\BaseUser|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\BaseUser|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets accountId
    *  账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 账号ID，参见《云审计服务API参考》“获取账号ID和项目ID”章节。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accessKeyId
    *  访问密钥ID。
    *
    * @return string|null
    */
    public function getAccessKeyId()
    {
        return $this->container['accessKeyId'];
    }

    /**
    * Sets accessKeyId
    *
    * @param string|null $accessKeyId 访问密钥ID。
    *
    * @return $this
    */
    public function setAccessKeyId($accessKeyId)
    {
        $this->container['accessKeyId'] = $accessKeyId;
        return $this;
    }

    /**
    * Gets principalUrn
    *  操作用户身份的 URN。 如果是 IAM 用户身份，格式如 iam::<account-id>:user:<user-name>。 如果是 IAM 委托会话 身份，格式如 sts::<account-id>:assumed-agency:<agency-name>/<agency-session-name>。 如果是 IAM 联邦身份，格式如 sts::<account-id>:external-user:<idp_id>/<user-session-name>。
    *
    * @return string|null
    */
    public function getPrincipalUrn()
    {
        return $this->container['principalUrn'];
    }

    /**
    * Sets principalUrn
    *
    * @param string|null $principalUrn 操作用户身份的 URN。 如果是 IAM 用户身份，格式如 iam::<account-id>:user:<user-name>。 如果是 IAM 委托会话 身份，格式如 sts::<account-id>:assumed-agency:<agency-name>/<agency-session-name>。 如果是 IAM 联邦身份，格式如 sts::<account-id>:external-user:<idp_id>/<user-session-name>。
    *
    * @return $this
    */
    public function setPrincipalUrn($principalUrn)
    {
        $this->container['principalUrn'] = $principalUrn;
        return $this;
    }

    /**
    * Gets principalId
    *  操作用户身份Id。 - 如果是 IAM 用户身份，格式为 <user-id>。 - 如果是 IAM 委托会话身份，格式为 <agency-id>:<agency-session-name>。 - 如果是 IAM 联邦身份，格式为 <idp_id>:<user-session-name>
    *
    * @return string|null
    */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
    * Sets principalId
    *
    * @param string|null $principalId 操作用户身份Id。 - 如果是 IAM 用户身份，格式为 <user-id>。 - 如果是 IAM 委托会话身份，格式为 <agency-id>:<agency-session-name>。 - 如果是 IAM 联邦身份，格式为 <idp_id>:<user-session-name>
    *
    * @return $this
    */
    public function setPrincipalId($principalId)
    {
        $this->container['principalId'] = $principalId;
        return $this;
    }

    /**
    * Gets principalIsRootUser
    *  是否是根用户。 - 值为“true”时，表示操作者是根用户。 - 值为“false”时，表示操作者是委托会话身份、联邦身份或非根用户的 IAM 用户。
    *
    * @return string|null
    */
    public function getPrincipalIsRootUser()
    {
        return $this->container['principalIsRootUser'];
    }

    /**
    * Sets principalIsRootUser
    *
    * @param string|null $principalIsRootUser 是否是根用户。 - 值为“true”时，表示操作者是根用户。 - 值为“false”时，表示操作者是委托会话身份、联邦身份或非根用户的 IAM 用户。
    *
    * @return $this
    */
    public function setPrincipalIsRootUser($principalIsRootUser)
    {
        $this->container['principalIsRootUser'] = $principalIsRootUser;
        return $this;
    }

    /**
    * Gets type
    *  操作者身份类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 操作者身份类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets invokedBy
    *  发出请求的服务的名称。控制台操作时为[\"service.console\" ]
    *
    * @return string[]|null
    */
    public function getInvokedBy()
    {
        return $this->container['invokedBy'];
    }

    /**
    * Sets invokedBy
    *
    * @param string[]|null $invokedBy 发出请求的服务的名称。控制台操作时为[\"service.console\" ]
    *
    * @return $this
    */
    public function setInvokedBy($invokedBy)
    {
        $this->container['invokedBy'] = $invokedBy;
        return $this;
    }

    /**
    * Gets sessionContext
    *  sessionContext
    *
    * @return \HuaweiCloud\SDK\Cts\V3\Model\SessionContext|null
    */
    public function getSessionContext()
    {
        return $this->container['sessionContext'];
    }

    /**
    * Sets sessionContext
    *
    * @param \HuaweiCloud\SDK\Cts\V3\Model\SessionContext|null $sessionContext sessionContext
    *
    * @return $this
    */
    public function setSessionContext($sessionContext)
    {
        $this->container['sessionContext'] = $sessionContext;
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


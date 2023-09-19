<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * backupStrategy  backupStrategy
    * roles  roles
    * nics  nics
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * availabilityZone  可用区。
    * datastore  datastore
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。 - true：表示集群进行通信加密。 - false：表示集群不进行通信加密。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。  - 参数范围：8~32个字符。  - 参数要求：密码至少包含大写字母，小写字母，数字、特殊字符四类中的三类，其中可输入的特殊字符为：~!@#$%&*()-_=|[{}];:,<.>/?
    * publicIpReq  publicIpReq
    * loadBalance  loadBalance
    * publicKibanaReq  publicKibanaReq
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterBackupStrategyBody',
            'roles' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterRolesBody[]',
            'nics' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterInstanceNicsBody',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterTagsBody[]',
            'availabilityZone' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterDatastoreBody',
            'authorityEnable' => 'bool',
            'httpsEnable' => 'bool',
            'adminPwd' => 'string',
            'publicIpReq' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicIpReq',
            'loadBalance' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterLoadBalance',
            'publicKibanaReq' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicKibanaReq',
            'payInfo' => '\HuaweiCloud\SDK\Css\V2\Model\PayInfoBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * backupStrategy  backupStrategy
    * roles  roles
    * nics  nics
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * availabilityZone  可用区。
    * datastore  datastore
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。 - true：表示集群进行通信加密。 - false：表示集群不进行通信加密。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。  - 参数范围：8~32个字符。  - 参数要求：密码至少包含大写字母，小写字母，数字、特殊字符四类中的三类，其中可输入的特殊字符为：~!@#$%&*()-_=|[{}];:,<.>/?
    * publicIpReq  publicIpReq
    * loadBalance  loadBalance
    * publicKibanaReq  publicKibanaReq
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'backupStrategy' => null,
        'roles' => null,
        'nics' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'availabilityZone' => null,
        'datastore' => null,
        'authorityEnable' => null,
        'httpsEnable' => null,
        'adminPwd' => null,
        'publicIpReq' => null,
        'loadBalance' => null,
        'publicKibanaReq' => null,
        'payInfo' => null
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
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * backupStrategy  backupStrategy
    * roles  roles
    * nics  nics
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * availabilityZone  可用区。
    * datastore  datastore
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。 - true：表示集群进行通信加密。 - false：表示集群不进行通信加密。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。  - 参数范围：8~32个字符。  - 参数要求：密码至少包含大写字母，小写字母，数字、特殊字符四类中的三类，其中可输入的特殊字符为：~!@#$%&*()-_=|[{}];:,<.>/?
    * publicIpReq  publicIpReq
    * loadBalance  loadBalance
    * publicKibanaReq  publicKibanaReq
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'backupStrategy' => 'backupStrategy',
            'roles' => 'roles',
            'nics' => 'nics',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'availabilityZone' => 'availability_zone',
            'datastore' => 'datastore',
            'authorityEnable' => 'authorityEnable',
            'httpsEnable' => 'httpsEnable',
            'adminPwd' => 'adminPwd',
            'publicIpReq' => 'publicIPReq',
            'loadBalance' => 'loadBalance',
            'publicKibanaReq' => 'publicKibanaReq',
            'payInfo' => 'payInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * backupStrategy  backupStrategy
    * roles  roles
    * nics  nics
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * availabilityZone  可用区。
    * datastore  datastore
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。 - true：表示集群进行通信加密。 - false：表示集群不进行通信加密。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。  - 参数范围：8~32个字符。  - 参数要求：密码至少包含大写字母，小写字母，数字、特殊字符四类中的三类，其中可输入的特殊字符为：~!@#$%&*()-_=|[{}];:,<.>/?
    * publicIpReq  publicIpReq
    * loadBalance  loadBalance
    * publicKibanaReq  publicKibanaReq
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'backupStrategy' => 'setBackupStrategy',
            'roles' => 'setRoles',
            'nics' => 'setNics',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'availabilityZone' => 'setAvailabilityZone',
            'datastore' => 'setDatastore',
            'authorityEnable' => 'setAuthorityEnable',
            'httpsEnable' => 'setHttpsEnable',
            'adminPwd' => 'setAdminPwd',
            'publicIpReq' => 'setPublicIpReq',
            'loadBalance' => 'setLoadBalance',
            'publicKibanaReq' => 'setPublicKibanaReq',
            'payInfo' => 'setPayInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * backupStrategy  backupStrategy
    * roles  roles
    * nics  nics
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * availabilityZone  可用区。
    * datastore  datastore
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。 - true：表示集群进行通信加密。 - false：表示集群不进行通信加密。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。  - 参数范围：8~32个字符。  - 参数要求：密码至少包含大写字母，小写字母，数字、特殊字符四类中的三类，其中可输入的特殊字符为：~!@#$%&*()-_=|[{}];:,<.>/?
    * publicIpReq  publicIpReq
    * loadBalance  loadBalance
    * publicKibanaReq  publicKibanaReq
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'backupStrategy' => 'getBackupStrategy',
            'roles' => 'getRoles',
            'nics' => 'getNics',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'availabilityZone' => 'getAvailabilityZone',
            'datastore' => 'getDatastore',
            'authorityEnable' => 'getAuthorityEnable',
            'httpsEnable' => 'getHttpsEnable',
            'adminPwd' => 'getAdminPwd',
            'publicIpReq' => 'getPublicIpReq',
            'loadBalance' => 'getLoadBalance',
            'publicKibanaReq' => 'getPublicKibanaReq',
            'payInfo' => 'getPayInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['authorityEnable'] = isset($data['authorityEnable']) ? $data['authorityEnable'] : null;
        $this->container['httpsEnable'] = isset($data['httpsEnable']) ? $data['httpsEnable'] : null;
        $this->container['adminPwd'] = isset($data['adminPwd']) ? $data['adminPwd'] : null;
        $this->container['publicIpReq'] = isset($data['publicIpReq']) ? $data['publicIpReq'] : null;
        $this->container['loadBalance'] = isset($data['loadBalance']) ? $data['loadBalance'] : null;
        $this->container['publicKibanaReq'] = isset($data['publicKibanaReq']) ? $data['publicKibanaReq'] : null;
        $this->container['payInfo'] = isset($data['payInfo']) ? $data['payInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/[a-zA-Z][a-zA-Z0-9-_]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-zA-Z][a-zA-Z0-9-_]+/.";
            }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
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
    * Gets name
    *  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterBackupStrategyBody|null
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterBackupStrategyBody|null $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
        return $this;
    }

    /**
    * Gets roles
    *  roles
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterRolesBody[]
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterRolesBody[] $roles roles
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets nics
    *  nics
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterInstanceNicsBody
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterInstanceNicsBody $nics nics
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
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
    * @param string|null $enterpriseProjectId 企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  集群标签。
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterTagsBody[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterTagsBody[]|null $tags 集群标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterDatastoreBody
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterDatastoreBody $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets authorityEnable
    *  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    *
    * @return bool|null
    */
    public function getAuthorityEnable()
    {
        return $this->container['authorityEnable'];
    }

    /**
    * Sets authorityEnable
    *
    * @param bool|null $authorityEnable 是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    *
    * @return $this
    */
    public function setAuthorityEnable($authorityEnable)
    {
        $this->container['authorityEnable'] = $authorityEnable;
        return $this;
    }

    /**
    * Gets httpsEnable
    *  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。 - true：表示集群进行通信加密。 - false：表示集群不进行通信加密。  >此参数只有6.5.4及之后版本支持。
    *
    * @return bool|null
    */
    public function getHttpsEnable()
    {
        return $this->container['httpsEnable'];
    }

    /**
    * Sets httpsEnable
    *
    * @param bool|null $httpsEnable 设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。 - true：表示集群进行通信加密。 - false：表示集群不进行通信加密。  >此参数只有6.5.4及之后版本支持。
    *
    * @return $this
    */
    public function setHttpsEnable($httpsEnable)
    {
        $this->container['httpsEnable'] = $httpsEnable;
        return $this;
    }

    /**
    * Gets adminPwd
    *  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。  - 参数范围：8~32个字符。  - 参数要求：密码至少包含大写字母，小写字母，数字、特殊字符四类中的三类，其中可输入的特殊字符为：~!@#$%&*()-_=|[{}];:,<.>/?
    *
    * @return string|null
    */
    public function getAdminPwd()
    {
        return $this->container['adminPwd'];
    }

    /**
    * Sets adminPwd
    *
    * @param string|null $adminPwd 安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。  - 参数范围：8~32个字符。  - 参数要求：密码至少包含大写字母，小写字母，数字、特殊字符四类中的三类，其中可输入的特殊字符为：~!@#$%&*()-_=|[{}];:,<.>/?
    *
    * @return $this
    */
    public function setAdminPwd($adminPwd)
    {
        $this->container['adminPwd'] = $adminPwd;
        return $this;
    }

    /**
    * Gets publicIpReq
    *  publicIpReq
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicIpReq|null
    */
    public function getPublicIpReq()
    {
        return $this->container['publicIpReq'];
    }

    /**
    * Sets publicIpReq
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicIpReq|null $publicIpReq publicIpReq
    *
    * @return $this
    */
    public function setPublicIpReq($publicIpReq)
    {
        $this->container['publicIpReq'] = $publicIpReq;
        return $this;
    }

    /**
    * Gets loadBalance
    *  loadBalance
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterLoadBalance|null
    */
    public function getLoadBalance()
    {
        return $this->container['loadBalance'];
    }

    /**
    * Sets loadBalance
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterLoadBalance|null $loadBalance loadBalance
    *
    * @return $this
    */
    public function setLoadBalance($loadBalance)
    {
        $this->container['loadBalance'] = $loadBalance;
        return $this;
    }

    /**
    * Gets publicKibanaReq
    *  publicKibanaReq
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicKibanaReq|null
    */
    public function getPublicKibanaReq()
    {
        return $this->container['publicKibanaReq'];
    }

    /**
    * Sets publicKibanaReq
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterPublicKibanaReq|null $publicKibanaReq publicKibanaReq
    *
    * @return $this
    */
    public function setPublicKibanaReq($publicKibanaReq)
    {
        $this->container['publicKibanaReq'] = $publicKibanaReq;
        return $this;
    }

    /**
    * Gets payInfo
    *  payInfo
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\PayInfoBody|null
    */
    public function getPayInfo()
    {
        return $this->container['payInfo'];
    }

    /**
    * Sets payInfo
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\PayInfoBody|null $payInfo payInfo
    *
    * @return $this
    */
    public function setPayInfo($payInfo)
    {
        $this->container['payInfo'] = $payInfo;
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


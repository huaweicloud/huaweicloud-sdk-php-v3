<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

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
    * instance  instance
    * datastore  datastore
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * instanceNum  集群实例个数，取值范围为1~32。
    * backupStrategy  backupStrategy
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。   - true：表示集群进行通信加密。  - false：表示集群不进行通信加密。   >此参数只有6.5.4及之后版本支持。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。   - 管理员密码需要满足规则：    - 可输入的字符串长度为8-32个字符。    - 密码至少包含大写字母，小写字母，数字和特殊字符中的三类，其中可输入的特殊字符为：~!@#$%^&*()-_=+\\\\|[{}];:,<.>/?。   - 安全集群的密码会进行弱口令校验，建议设置安全性高的密码。
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instance' => '\HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceBody',
            'datastore' => '\HuaweiCloud\SDK\Css\V1\Model\CreateClusterDatastoreBody',
            'name' => 'string',
            'instanceNum' => 'int',
            'backupStrategy' => '\HuaweiCloud\SDK\Css\V1\Model\CreateClusterBackupStrategyBody',
            'httpsEnable' => 'bool',
            'authorityEnable' => 'bool',
            'adminPwd' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Css\V1\Model\CreateClusterTagsBody[]',
            'payInfo' => '\HuaweiCloud\SDK\Css\V1\Model\PayInfoBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instance  instance
    * datastore  datastore
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * instanceNum  集群实例个数，取值范围为1~32。
    * backupStrategy  backupStrategy
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。   - true：表示集群进行通信加密。  - false：表示集群不进行通信加密。   >此参数只有6.5.4及之后版本支持。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。   - 管理员密码需要满足规则：    - 可输入的字符串长度为8-32个字符。    - 密码至少包含大写字母，小写字母，数字和特殊字符中的三类，其中可输入的特殊字符为：~!@#$%^&*()-_=+\\\\|[{}];:,<.>/?。   - 安全集群的密码会进行弱口令校验，建议设置安全性高的密码。
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instance' => null,
        'datastore' => null,
        'name' => null,
        'instanceNum' => 'int32',
        'backupStrategy' => null,
        'httpsEnable' => null,
        'authorityEnable' => null,
        'adminPwd' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
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
    * instance  instance
    * datastore  datastore
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * instanceNum  集群实例个数，取值范围为1~32。
    * backupStrategy  backupStrategy
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。   - true：表示集群进行通信加密。  - false：表示集群不进行通信加密。   >此参数只有6.5.4及之后版本支持。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。   - 管理员密码需要满足规则：    - 可输入的字符串长度为8-32个字符。    - 密码至少包含大写字母，小写字母，数字和特殊字符中的三类，其中可输入的特殊字符为：~!@#$%^&*()-_=+\\\\|[{}];:,<.>/?。   - 安全集群的密码会进行弱口令校验，建议设置安全性高的密码。
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instance' => 'instance',
            'datastore' => 'datastore',
            'name' => 'name',
            'instanceNum' => 'instanceNum',
            'backupStrategy' => 'backupStrategy',
            'httpsEnable' => 'httpsEnable',
            'authorityEnable' => 'authorityEnable',
            'adminPwd' => 'adminPwd',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'payInfo' => 'payInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instance  instance
    * datastore  datastore
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * instanceNum  集群实例个数，取值范围为1~32。
    * backupStrategy  backupStrategy
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。   - true：表示集群进行通信加密。  - false：表示集群不进行通信加密。   >此参数只有6.5.4及之后版本支持。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。   - 管理员密码需要满足规则：    - 可输入的字符串长度为8-32个字符。    - 密码至少包含大写字母，小写字母，数字和特殊字符中的三类，其中可输入的特殊字符为：~!@#$%^&*()-_=+\\\\|[{}];:,<.>/?。   - 安全集群的密码会进行弱口令校验，建议设置安全性高的密码。
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'instance' => 'setInstance',
            'datastore' => 'setDatastore',
            'name' => 'setName',
            'instanceNum' => 'setInstanceNum',
            'backupStrategy' => 'setBackupStrategy',
            'httpsEnable' => 'setHttpsEnable',
            'authorityEnable' => 'setAuthorityEnable',
            'adminPwd' => 'setAdminPwd',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'payInfo' => 'setPayInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instance  instance
    * datastore  datastore
    * name  集群名称。4～32个字符，只能包含数字、字母、中划线和下划线，且必须以字母开头。
    * instanceNum  集群实例个数，取值范围为1~32。
    * backupStrategy  backupStrategy
    * httpsEnable  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。   - true：表示集群进行通信加密。  - false：表示集群不进行通信加密。   >此参数只有6.5.4及之后版本支持。
    * authorityEnable  是否开启认证，取值范围为true或false。默认关闭认证功能。  - true：表示集群开启认证。 - false：表示集群不开启认证。  >此参数只有6.5.4及之后版本支持。
    * adminPwd  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。   - 管理员密码需要满足规则：    - 可输入的字符串长度为8-32个字符。    - 密码至少包含大写字母，小写字母，数字和特殊字符中的三类，其中可输入的特殊字符为：~!@#$%^&*()-_=+\\\\|[{}];:,<.>/?。   - 安全集群的密码会进行弱口令校验，建议设置安全性高的密码。
    * enterpriseProjectId  企业项目ID。创建集群时，给集群绑定企业项目ID。最大长度36个字符，带\"-\"连字符的UUID格式，或者是字符串\"0\"。\"0\"表示默认企业项目。
    * tags  集群标签。
    * payInfo  payInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'instance' => 'getInstance',
            'datastore' => 'getDatastore',
            'name' => 'getName',
            'instanceNum' => 'getInstanceNum',
            'backupStrategy' => 'getBackupStrategy',
            'httpsEnable' => 'getHttpsEnable',
            'authorityEnable' => 'getAuthorityEnable',
            'adminPwd' => 'getAdminPwd',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['httpsEnable'] = isset($data['httpsEnable']) ? $data['httpsEnable'] : null;
        $this->container['authorityEnable'] = isset($data['authorityEnable']) ? $data['authorityEnable'] : null;
        $this->container['adminPwd'] = isset($data['adminPwd']) ? $data['adminPwd'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
        if ($this->container['instance'] === null) {
            $invalidProperties[] = "'instance' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/[a-zA-Z][a-zA-Z0-9-_]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-zA-Z][a-zA-Z0-9-_]+/.";
            }
        if ($this->container['instanceNum'] === null) {
            $invalidProperties[] = "'instanceNum' can't be null";
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
    * Gets instance
    *  instance
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceBody
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateClusterInstanceBody $instance instance
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateClusterDatastoreBody
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateClusterDatastoreBody $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
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
    * Gets instanceNum
    *  集群实例个数，取值范围为1~32。
    *
    * @return int
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int $instanceNum 集群实例个数，取值范围为1~32。
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateClusterBackupStrategyBody|null
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateClusterBackupStrategyBody|null $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
        return $this;
    }

    /**
    * Gets httpsEnable
    *  设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。   - true：表示集群进行通信加密。  - false：表示集群不进行通信加密。   >此参数只有6.5.4及之后版本支持。
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
    * @param bool|null $httpsEnable 设置是否进行通信加密。取值范围为true或false。默认关闭通信加密功能。当httpsEnable设置为true时，authorityEnable字段需要设置为true。   - true：表示集群进行通信加密。  - false：表示集群不进行通信加密。   >此参数只有6.5.4及之后版本支持。
    *
    * @return $this
    */
    public function setHttpsEnable($httpsEnable)
    {
        $this->container['httpsEnable'] = $httpsEnable;
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
    * Gets adminPwd
    *  安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。   - 管理员密码需要满足规则：    - 可输入的字符串长度为8-32个字符。    - 密码至少包含大写字母，小写字母，数字和特殊字符中的三类，其中可输入的特殊字符为：~!@#$%^&*()-_=+\\\\|[{}];:,<.>/?。   - 安全集群的密码会进行弱口令校验，建议设置安全性高的密码。
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
    * @param string|null $adminPwd 安全模式下集群管理员admin的密码，只有在创建集群时authorityEnable设置为true时需要设置此参数。   - 管理员密码需要满足规则：    - 可输入的字符串长度为8-32个字符。    - 密码至少包含大写字母，小写字母，数字和特殊字符中的三类，其中可输入的特殊字符为：~!@#$%^&*()-_=+\\\\|[{}];:,<.>/?。   - 安全集群的密码会进行弱口令校验，建议设置安全性高的密码。
    *
    * @return $this
    */
    public function setAdminPwd($adminPwd)
    {
        $this->container['adminPwd'] = $adminPwd;
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
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateClusterTagsBody[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateClusterTagsBody[]|null $tags 集群标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets payInfo
    *  payInfo
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\PayInfoBody|null
    */
    public function getPayInfo()
    {
        return $this->container['payInfo'];
    }

    /**
    * Sets payInfo
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\PayInfoBody|null $payInfo payInfo
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


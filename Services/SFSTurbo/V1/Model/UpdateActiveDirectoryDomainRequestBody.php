<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateActiveDirectoryDomainRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateActiveDirectoryDomainRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceAccount  服务账号，在创建域服务器时指定，一般默认为administrator
    * password  账号对应密码
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * overwriteSameAccount  如果域控制器中已存在同系统名称的存储系统，开启该选项后，将覆盖原有的存储系统信息。
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceAccount' => 'string',
            'password' => 'string',
            'domainName' => 'string',
            'systemName' => 'string',
            'overwriteSameAccount' => 'bool',
            'dnsServer' => 'string[]',
            'organizationUnit' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceAccount  服务账号，在创建域服务器时指定，一般默认为administrator
    * password  账号对应密码
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * overwriteSameAccount  如果域控制器中已存在同系统名称的存储系统，开启该选项后，将覆盖原有的存储系统信息。
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceAccount' => null,
        'password' => null,
        'domainName' => null,
        'systemName' => null,
        'overwriteSameAccount' => null,
        'dnsServer' => null,
        'organizationUnit' => null,
        'vpcId' => null
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
    * serviceAccount  服务账号，在创建域服务器时指定，一般默认为administrator
    * password  账号对应密码
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * overwriteSameAccount  如果域控制器中已存在同系统名称的存储系统，开启该选项后，将覆盖原有的存储系统信息。
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceAccount' => 'service_account',
            'password' => 'password',
            'domainName' => 'domain_name',
            'systemName' => 'system_name',
            'overwriteSameAccount' => 'overwrite_same_account',
            'dnsServer' => 'dns_server',
            'organizationUnit' => 'organization_unit',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceAccount  服务账号，在创建域服务器时指定，一般默认为administrator
    * password  账号对应密码
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * overwriteSameAccount  如果域控制器中已存在同系统名称的存储系统，开启该选项后，将覆盖原有的存储系统信息。
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceAccount' => 'setServiceAccount',
            'password' => 'setPassword',
            'domainName' => 'setDomainName',
            'systemName' => 'setSystemName',
            'overwriteSameAccount' => 'setOverwriteSameAccount',
            'dnsServer' => 'setDnsServer',
            'organizationUnit' => 'setOrganizationUnit',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceAccount  服务账号，在创建域服务器时指定，一般默认为administrator
    * password  账号对应密码
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * overwriteSameAccount  如果域控制器中已存在同系统名称的存储系统，开启该选项后，将覆盖原有的存储系统信息。
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceAccount' => 'getServiceAccount',
            'password' => 'getPassword',
            'domainName' => 'getDomainName',
            'systemName' => 'getSystemName',
            'overwriteSameAccount' => 'getOverwriteSameAccount',
            'dnsServer' => 'getDnsServer',
            'organizationUnit' => 'getOrganizationUnit',
            'vpcId' => 'getVpcId'
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
        $this->container['serviceAccount'] = isset($data['serviceAccount']) ? $data['serviceAccount'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['systemName'] = isset($data['systemName']) ? $data['systemName'] : null;
        $this->container['overwriteSameAccount'] = isset($data['overwriteSameAccount']) ? $data['overwriteSameAccount'] : null;
        $this->container['dnsServer'] = isset($data['dnsServer']) ? $data['dnsServer'] : null;
        $this->container['organizationUnit'] = isset($data['organizationUnit']) ? $data['organizationUnit'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceAccount'] === null) {
            $invalidProperties[] = "'serviceAccount' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['systemName'] === null) {
            $invalidProperties[] = "'systemName' can't be null";
        }
        if ($this->container['dnsServer'] === null) {
            $invalidProperties[] = "'dnsServer' can't be null";
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
    * Gets serviceAccount
    *  服务账号，在创建域服务器时指定，一般默认为administrator
    *
    * @return string
    */
    public function getServiceAccount()
    {
        return $this->container['serviceAccount'];
    }

    /**
    * Sets serviceAccount
    *
    * @param string $serviceAccount 服务账号，在创建域服务器时指定，一般默认为administrator
    *
    * @return $this
    */
    public function setServiceAccount($serviceAccount)
    {
        $this->container['serviceAccount'] = $serviceAccount;
        return $this;
    }

    /**
    * Gets password
    *  账号对应密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 账号对应密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets domainName
    *  域控服务器的域名，在创建域服务器时指定
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 域控服务器的域名，在创建域服务器时指定
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets systemName
    *  存储系统在AD域中的名称
    *
    * @return string
    */
    public function getSystemName()
    {
        return $this->container['systemName'];
    }

    /**
    * Sets systemName
    *
    * @param string $systemName 存储系统在AD域中的名称
    *
    * @return $this
    */
    public function setSystemName($systemName)
    {
        $this->container['systemName'] = $systemName;
        return $this;
    }

    /**
    * Gets overwriteSameAccount
    *  如果域控制器中已存在同系统名称的存储系统，开启该选项后，将覆盖原有的存储系统信息。
    *
    * @return bool|null
    */
    public function getOverwriteSameAccount()
    {
        return $this->container['overwriteSameAccount'];
    }

    /**
    * Sets overwriteSameAccount
    *
    * @param bool|null $overwriteSameAccount 如果域控制器中已存在同系统名称的存储系统，开启该选项后，将覆盖原有的存储系统信息。
    *
    * @return $this
    */
    public function setOverwriteSameAccount($overwriteSameAccount)
    {
        $this->container['overwriteSameAccount'] = $overwriteSameAccount;
        return $this;
    }

    /**
    * Gets dnsServer
    *  DNS服务器IP地址，用于解析AD域的域名
    *
    * @return string[]
    */
    public function getDnsServer()
    {
        return $this->container['dnsServer'];
    }

    /**
    * Sets dnsServer
    *
    * @param string[] $dnsServer DNS服务器IP地址，用于解析AD域的域名
    *
    * @return $this
    */
    public function setDnsServer($dnsServer)
    {
        $this->container['dnsServer'] = $dnsServer;
        return $this;
    }

    /**
    * Gets organizationUnit
    *  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    *
    * @return string|null
    */
    public function getOrganizationUnit()
    {
        return $this->container['organizationUnit'];
    }

    /**
    * Sets organizationUnit
    *
    * @param string|null $organizationUnit 域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    *
    * @return $this
    */
    public function setOrganizationUnit($organizationUnit)
    {
        $this->container['organizationUnit'] = $organizationUnit;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpc的id
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId vpc的id
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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


<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowActiveDirectoryDomainResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowActiveDirectoryDomainResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    * status  AD域当前状态信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'systemName' => 'string',
            'dnsServer' => 'string[]',
            'organizationUnit' => 'string',
            'vpcId' => 'string',
            'status' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    * status  AD域当前状态信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'systemName' => null,
        'dnsServer' => null,
        'organizationUnit' => null,
        'vpcId' => null,
        'status' => null,
        'xRequestId' => null
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
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    * status  AD域当前状态信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'systemName' => 'system_name',
            'dnsServer' => 'dns_server',
            'organizationUnit' => 'organization_unit',
            'vpcId' => 'vpc_id',
            'status' => 'status',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    * status  AD域当前状态信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'systemName' => 'setSystemName',
            'dnsServer' => 'setDnsServer',
            'organizationUnit' => 'setOrganizationUnit',
            'vpcId' => 'setVpcId',
            'status' => 'setStatus',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域控服务器的域名，在创建域服务器时指定
    * systemName  存储系统在AD域中的名称
    * dnsServer  DNS服务器IP地址，用于解析AD域的域名
    * organizationUnit  域中包含的一类目录对象如用户、计算机、打印机等资源的总称，加入后将作为其中的一员。若不填，则默认加入到computers组织单元。
    * vpcId  vpc的id
    * status  AD域当前状态信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'systemName' => 'getSystemName',
            'dnsServer' => 'getDnsServer',
            'organizationUnit' => 'getOrganizationUnit',
            'vpcId' => 'getVpcId',
            'status' => 'getStatus',
            'xRequestId' => 'getXRequestId'
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
    const STATUS_JOINING = 'JOINING';
    const STATUS_AVAILABLE = 'AVAILABLE';
    const STATUS_EXITING = 'EXITING';
    const STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_JOINING,
            self::STATUS_AVAILABLE,
            self::STATUS_EXITING,
            self::STATUS_FAILED,
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['systemName'] = isset($data['systemName']) ? $data['systemName'] : null;
        $this->container['dnsServer'] = isset($data['dnsServer']) ? $data['dnsServer'] : null;
        $this->container['organizationUnit'] = isset($data['organizationUnit']) ? $data['organizationUnit'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets domainName
    *  域控服务器的域名，在创建域服务器时指定
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
    * @param string|null $domainName 域控服务器的域名，在创建域服务器时指定
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
    * @return string|null
    */
    public function getSystemName()
    {
        return $this->container['systemName'];
    }

    /**
    * Sets systemName
    *
    * @param string|null $systemName 存储系统在AD域中的名称
    *
    * @return $this
    */
    public function setSystemName($systemName)
    {
        $this->container['systemName'] = $systemName;
        return $this;
    }

    /**
    * Gets dnsServer
    *  DNS服务器IP地址，用于解析AD域的域名
    *
    * @return string[]|null
    */
    public function getDnsServer()
    {
        return $this->container['dnsServer'];
    }

    /**
    * Sets dnsServer
    *
    * @param string[]|null $dnsServer DNS服务器IP地址，用于解析AD域的域名
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
    * Gets status
    *  AD域当前状态信息
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
    * @param string|null $status AD域当前状态信息
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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


<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LeaguePartnerStatisticsVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LeaguePartnerStatisticsVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partnerAccessCnt  合作方访问次数
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    * partnerJobCnt  作业总数
    * partnerJobInsCnt  实例总数
    * partnerJobInsFailCnt  实例失败数
    * partnerJobInsInterceptCnt  实例拦截数
    * partnerJobInsSuccessCnt  实例成功数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partnerAccessCnt' => 'int',
            'partnerDomainAlias' => 'string',
            'partnerDomainName' => 'string',
            'partnerJobCnt' => 'int',
            'partnerJobInsCnt' => 'int',
            'partnerJobInsFailCnt' => 'int',
            'partnerJobInsInterceptCnt' => 'int',
            'partnerJobInsSuccessCnt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partnerAccessCnt  合作方访问次数
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    * partnerJobCnt  作业总数
    * partnerJobInsCnt  实例总数
    * partnerJobInsFailCnt  实例失败数
    * partnerJobInsInterceptCnt  实例拦截数
    * partnerJobInsSuccessCnt  实例成功数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partnerAccessCnt' => 'int64',
        'partnerDomainAlias' => null,
        'partnerDomainName' => null,
        'partnerJobCnt' => 'int64',
        'partnerJobInsCnt' => 'int64',
        'partnerJobInsFailCnt' => 'int64',
        'partnerJobInsInterceptCnt' => 'int64',
        'partnerJobInsSuccessCnt' => 'int64'
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
    * partnerAccessCnt  合作方访问次数
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    * partnerJobCnt  作业总数
    * partnerJobInsCnt  实例总数
    * partnerJobInsFailCnt  实例失败数
    * partnerJobInsInterceptCnt  实例拦截数
    * partnerJobInsSuccessCnt  实例成功数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partnerAccessCnt' => 'partner_access_cnt',
            'partnerDomainAlias' => 'partner_domain_alias',
            'partnerDomainName' => 'partner_domain_name',
            'partnerJobCnt' => 'partner_job_cnt',
            'partnerJobInsCnt' => 'partner_job_ins_cnt',
            'partnerJobInsFailCnt' => 'partner_job_ins_fail_cnt',
            'partnerJobInsInterceptCnt' => 'partner_job_ins_intercept_cnt',
            'partnerJobInsSuccessCnt' => 'partner_job_ins_success_cnt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partnerAccessCnt  合作方访问次数
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    * partnerJobCnt  作业总数
    * partnerJobInsCnt  实例总数
    * partnerJobInsFailCnt  实例失败数
    * partnerJobInsInterceptCnt  实例拦截数
    * partnerJobInsSuccessCnt  实例成功数
    *
    * @var string[]
    */
    protected static $setters = [
            'partnerAccessCnt' => 'setPartnerAccessCnt',
            'partnerDomainAlias' => 'setPartnerDomainAlias',
            'partnerDomainName' => 'setPartnerDomainName',
            'partnerJobCnt' => 'setPartnerJobCnt',
            'partnerJobInsCnt' => 'setPartnerJobInsCnt',
            'partnerJobInsFailCnt' => 'setPartnerJobInsFailCnt',
            'partnerJobInsInterceptCnt' => 'setPartnerJobInsInterceptCnt',
            'partnerJobInsSuccessCnt' => 'setPartnerJobInsSuccessCnt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partnerAccessCnt  合作方访问次数
    * partnerDomainAlias  租户别名
    * partnerDomainName  租户名
    * partnerJobCnt  作业总数
    * partnerJobInsCnt  实例总数
    * partnerJobInsFailCnt  实例失败数
    * partnerJobInsInterceptCnt  实例拦截数
    * partnerJobInsSuccessCnt  实例成功数
    *
    * @var string[]
    */
    protected static $getters = [
            'partnerAccessCnt' => 'getPartnerAccessCnt',
            'partnerDomainAlias' => 'getPartnerDomainAlias',
            'partnerDomainName' => 'getPartnerDomainName',
            'partnerJobCnt' => 'getPartnerJobCnt',
            'partnerJobInsCnt' => 'getPartnerJobInsCnt',
            'partnerJobInsFailCnt' => 'getPartnerJobInsFailCnt',
            'partnerJobInsInterceptCnt' => 'getPartnerJobInsInterceptCnt',
            'partnerJobInsSuccessCnt' => 'getPartnerJobInsSuccessCnt'
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
        $this->container['partnerAccessCnt'] = isset($data['partnerAccessCnt']) ? $data['partnerAccessCnt'] : null;
        $this->container['partnerDomainAlias'] = isset($data['partnerDomainAlias']) ? $data['partnerDomainAlias'] : null;
        $this->container['partnerDomainName'] = isset($data['partnerDomainName']) ? $data['partnerDomainName'] : null;
        $this->container['partnerJobCnt'] = isset($data['partnerJobCnt']) ? $data['partnerJobCnt'] : null;
        $this->container['partnerJobInsCnt'] = isset($data['partnerJobInsCnt']) ? $data['partnerJobInsCnt'] : null;
        $this->container['partnerJobInsFailCnt'] = isset($data['partnerJobInsFailCnt']) ? $data['partnerJobInsFailCnt'] : null;
        $this->container['partnerJobInsInterceptCnt'] = isset($data['partnerJobInsInterceptCnt']) ? $data['partnerJobInsInterceptCnt'] : null;
        $this->container['partnerJobInsSuccessCnt'] = isset($data['partnerJobInsSuccessCnt']) ? $data['partnerJobInsSuccessCnt'] : null;
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
    * Gets partnerAccessCnt
    *  合作方访问次数
    *
    * @return int|null
    */
    public function getPartnerAccessCnt()
    {
        return $this->container['partnerAccessCnt'];
    }

    /**
    * Sets partnerAccessCnt
    *
    * @param int|null $partnerAccessCnt 合作方访问次数
    *
    * @return $this
    */
    public function setPartnerAccessCnt($partnerAccessCnt)
    {
        $this->container['partnerAccessCnt'] = $partnerAccessCnt;
        return $this;
    }

    /**
    * Gets partnerDomainAlias
    *  租户别名
    *
    * @return string|null
    */
    public function getPartnerDomainAlias()
    {
        return $this->container['partnerDomainAlias'];
    }

    /**
    * Sets partnerDomainAlias
    *
    * @param string|null $partnerDomainAlias 租户别名
    *
    * @return $this
    */
    public function setPartnerDomainAlias($partnerDomainAlias)
    {
        $this->container['partnerDomainAlias'] = $partnerDomainAlias;
        return $this;
    }

    /**
    * Gets partnerDomainName
    *  租户名
    *
    * @return string|null
    */
    public function getPartnerDomainName()
    {
        return $this->container['partnerDomainName'];
    }

    /**
    * Sets partnerDomainName
    *
    * @param string|null $partnerDomainName 租户名
    *
    * @return $this
    */
    public function setPartnerDomainName($partnerDomainName)
    {
        $this->container['partnerDomainName'] = $partnerDomainName;
        return $this;
    }

    /**
    * Gets partnerJobCnt
    *  作业总数
    *
    * @return int|null
    */
    public function getPartnerJobCnt()
    {
        return $this->container['partnerJobCnt'];
    }

    /**
    * Sets partnerJobCnt
    *
    * @param int|null $partnerJobCnt 作业总数
    *
    * @return $this
    */
    public function setPartnerJobCnt($partnerJobCnt)
    {
        $this->container['partnerJobCnt'] = $partnerJobCnt;
        return $this;
    }

    /**
    * Gets partnerJobInsCnt
    *  实例总数
    *
    * @return int|null
    */
    public function getPartnerJobInsCnt()
    {
        return $this->container['partnerJobInsCnt'];
    }

    /**
    * Sets partnerJobInsCnt
    *
    * @param int|null $partnerJobInsCnt 实例总数
    *
    * @return $this
    */
    public function setPartnerJobInsCnt($partnerJobInsCnt)
    {
        $this->container['partnerJobInsCnt'] = $partnerJobInsCnt;
        return $this;
    }

    /**
    * Gets partnerJobInsFailCnt
    *  实例失败数
    *
    * @return int|null
    */
    public function getPartnerJobInsFailCnt()
    {
        return $this->container['partnerJobInsFailCnt'];
    }

    /**
    * Sets partnerJobInsFailCnt
    *
    * @param int|null $partnerJobInsFailCnt 实例失败数
    *
    * @return $this
    */
    public function setPartnerJobInsFailCnt($partnerJobInsFailCnt)
    {
        $this->container['partnerJobInsFailCnt'] = $partnerJobInsFailCnt;
        return $this;
    }

    /**
    * Gets partnerJobInsInterceptCnt
    *  实例拦截数
    *
    * @return int|null
    */
    public function getPartnerJobInsInterceptCnt()
    {
        return $this->container['partnerJobInsInterceptCnt'];
    }

    /**
    * Sets partnerJobInsInterceptCnt
    *
    * @param int|null $partnerJobInsInterceptCnt 实例拦截数
    *
    * @return $this
    */
    public function setPartnerJobInsInterceptCnt($partnerJobInsInterceptCnt)
    {
        $this->container['partnerJobInsInterceptCnt'] = $partnerJobInsInterceptCnt;
        return $this;
    }

    /**
    * Gets partnerJobInsSuccessCnt
    *  实例成功数
    *
    * @return int|null
    */
    public function getPartnerJobInsSuccessCnt()
    {
        return $this->container['partnerJobInsSuccessCnt'];
    }

    /**
    * Sets partnerJobInsSuccessCnt
    *
    * @param int|null $partnerJobInsSuccessCnt 实例成功数
    *
    * @return $this
    */
    public function setPartnerJobInsSuccessCnt($partnerJobInsSuccessCnt)
    {
        $this->container['partnerJobInsSuccessCnt'] = $partnerJobInsSuccessCnt;
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


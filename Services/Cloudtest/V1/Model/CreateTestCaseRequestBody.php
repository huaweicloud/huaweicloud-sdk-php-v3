<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTestCaseRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTestCaseRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  页面上显示的用例名称，长度为[3-128]位字符
    * serviceId  该值由注册接口返回,取值范围为10-9999
    * rankId  测试用例等级，可选值为[0,1,2,3,4]，不填时默认为2
    * testcaseNumber  用例编号，不填该值时会自动生成，长度为[3-128]位字符
    * extendInfo  extendInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'serviceId' => 'int',
            'rankId' => 'string',
            'testcaseNumber' => 'string',
            'extendInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  页面上显示的用例名称，长度为[3-128]位字符
    * serviceId  该值由注册接口返回,取值范围为10-9999
    * rankId  测试用例等级，可选值为[0,1,2,3,4]，不填时默认为2
    * testcaseNumber  用例编号，不填该值时会自动生成，长度为[3-128]位字符
    * extendInfo  extendInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'serviceId' => null,
        'rankId' => null,
        'testcaseNumber' => null,
        'extendInfo' => null
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
    * name  页面上显示的用例名称，长度为[3-128]位字符
    * serviceId  该值由注册接口返回,取值范围为10-9999
    * rankId  测试用例等级，可选值为[0,1,2,3,4]，不填时默认为2
    * testcaseNumber  用例编号，不填该值时会自动生成，长度为[3-128]位字符
    * extendInfo  extendInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'serviceId' => 'service_id',
            'rankId' => 'rank_id',
            'testcaseNumber' => 'testcase_number',
            'extendInfo' => 'extend_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  页面上显示的用例名称，长度为[3-128]位字符
    * serviceId  该值由注册接口返回,取值范围为10-9999
    * rankId  测试用例等级，可选值为[0,1,2,3,4]，不填时默认为2
    * testcaseNumber  用例编号，不填该值时会自动生成，长度为[3-128]位字符
    * extendInfo  extendInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'serviceId' => 'setServiceId',
            'rankId' => 'setRankId',
            'testcaseNumber' => 'setTestcaseNumber',
            'extendInfo' => 'setExtendInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  页面上显示的用例名称，长度为[3-128]位字符
    * serviceId  该值由注册接口返回,取值范围为10-9999
    * rankId  测试用例等级，可选值为[0,1,2,3,4]，不填时默认为2
    * testcaseNumber  用例编号，不填该值时会自动生成，长度为[3-128]位字符
    * extendInfo  extendInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'serviceId' => 'getServiceId',
            'rankId' => 'getRankId',
            'testcaseNumber' => 'getTestcaseNumber',
            'extendInfo' => 'getExtendInfo'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['rankId'] = isset($data['rankId']) ? $data['rankId'] : null;
        $this->container['testcaseNumber'] = isset($data['testcaseNumber']) ? $data['testcaseNumber'] : null;
        $this->container['extendInfo'] = isset($data['extendInfo']) ? $data['extendInfo'] : null;
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
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
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
    *  页面上显示的用例名称，长度为[3-128]位字符
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
    * @param string $name 页面上显示的用例名称，长度为[3-128]位字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets serviceId
    *  该值由注册接口返回,取值范围为10-9999
    *
    * @return int
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param int $serviceId 该值由注册接口返回,取值范围为10-9999
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets rankId
    *  测试用例等级，可选值为[0,1,2,3,4]，不填时默认为2
    *
    * @return string|null
    */
    public function getRankId()
    {
        return $this->container['rankId'];
    }

    /**
    * Sets rankId
    *
    * @param string|null $rankId 测试用例等级，可选值为[0,1,2,3,4]，不填时默认为2
    *
    * @return $this
    */
    public function setRankId($rankId)
    {
        $this->container['rankId'] = $rankId;
        return $this;
    }

    /**
    * Gets testcaseNumber
    *  用例编号，不填该值时会自动生成，长度为[3-128]位字符
    *
    * @return string|null
    */
    public function getTestcaseNumber()
    {
        return $this->container['testcaseNumber'];
    }

    /**
    * Sets testcaseNumber
    *
    * @param string|null $testcaseNumber 用例编号，不填该值时会自动生成，长度为[3-128]位字符
    *
    * @return $this
    */
    public function setTestcaseNumber($testcaseNumber)
    {
        $this->container['testcaseNumber'] = $testcaseNumber;
        return $this;
    }

    /**
    * Gets extendInfo
    *  extendInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseInfo|null
    */
    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    /**
    * Sets extendInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalServiceCaseInfo|null $extendInfo extendInfo
    *
    * @return $this
    */
    public function setExtendInfo($extendInfo)
    {
        $this->container['extendInfo'] = $extendInfo;
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


<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudTestCaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudTestCaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseId  用例id
    * caseType  tmss用例类型
    * isForbidden  是否未禁用，1为未禁用，0为已禁用
    * owner  owner
    * result  result
    * scriptUrl  用例脚本路径
    * status  status
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseId' => 'string',
            'caseType' => 'int',
            'isForbidden' => 'int',
            'owner' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto',
            'result' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto',
            'scriptUrl' => 'string',
            'status' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto',
            'testCaseName' => 'string',
            'testCaseNumber' => 'string',
            'tmssVersionUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseId  用例id
    * caseType  tmss用例类型
    * isForbidden  是否未禁用，1为未禁用，0为已禁用
    * owner  owner
    * result  result
    * scriptUrl  用例脚本路径
    * status  status
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseId' => null,
        'caseType' => 'int32',
        'isForbidden' => 'int32',
        'owner' => null,
        'result' => null,
        'scriptUrl' => null,
        'status' => null,
        'testCaseName' => null,
        'testCaseNumber' => null,
        'tmssVersionUri' => null
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
    * caseId  用例id
    * caseType  tmss用例类型
    * isForbidden  是否未禁用，1为未禁用，0为已禁用
    * owner  owner
    * result  result
    * scriptUrl  用例脚本路径
    * status  status
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseId' => 'case_id',
            'caseType' => 'caseType',
            'isForbidden' => 'is_forbidden',
            'owner' => 'owner',
            'result' => 'result',
            'scriptUrl' => 'scriptUrl',
            'status' => 'status',
            'testCaseName' => 'testCaseName',
            'testCaseNumber' => 'testCaseNumber',
            'tmssVersionUri' => 'tmssVersionUri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseId  用例id
    * caseType  tmss用例类型
    * isForbidden  是否未禁用，1为未禁用，0为已禁用
    * owner  owner
    * result  result
    * scriptUrl  用例脚本路径
    * status  status
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $setters = [
            'caseId' => 'setCaseId',
            'caseType' => 'setCaseType',
            'isForbidden' => 'setIsForbidden',
            'owner' => 'setOwner',
            'result' => 'setResult',
            'scriptUrl' => 'setScriptUrl',
            'status' => 'setStatus',
            'testCaseName' => 'setTestCaseName',
            'testCaseNumber' => 'setTestCaseNumber',
            'tmssVersionUri' => 'setTmssVersionUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseId  用例id
    * caseType  tmss用例类型
    * isForbidden  是否未禁用，1为未禁用，0为已禁用
    * owner  owner
    * result  result
    * scriptUrl  用例脚本路径
    * status  status
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $getters = [
            'caseId' => 'getCaseId',
            'caseType' => 'getCaseType',
            'isForbidden' => 'getIsForbidden',
            'owner' => 'getOwner',
            'result' => 'getResult',
            'scriptUrl' => 'getScriptUrl',
            'status' => 'getStatus',
            'testCaseName' => 'getTestCaseName',
            'testCaseNumber' => 'getTestCaseNumber',
            'tmssVersionUri' => 'getTmssVersionUri'
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
        $this->container['caseId'] = isset($data['caseId']) ? $data['caseId'] : null;
        $this->container['caseType'] = isset($data['caseType']) ? $data['caseType'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['scriptUrl'] = isset($data['scriptUrl']) ? $data['scriptUrl'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['testCaseName'] = isset($data['testCaseName']) ? $data['testCaseName'] : null;
        $this->container['testCaseNumber'] = isset($data['testCaseNumber']) ? $data['testCaseNumber'] : null;
        $this->container['tmssVersionUri'] = isset($data['tmssVersionUri']) ? $data['tmssVersionUri'] : null;
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
    * Gets caseId
    *  用例id
    *
    * @return string|null
    */
    public function getCaseId()
    {
        return $this->container['caseId'];
    }

    /**
    * Sets caseId
    *
    * @param string|null $caseId 用例id
    *
    * @return $this
    */
    public function setCaseId($caseId)
    {
        $this->container['caseId'] = $caseId;
        return $this;
    }

    /**
    * Gets caseType
    *  tmss用例类型
    *
    * @return int|null
    */
    public function getCaseType()
    {
        return $this->container['caseType'];
    }

    /**
    * Sets caseType
    *
    * @param int|null $caseType tmss用例类型
    *
    * @return $this
    */
    public function setCaseType($caseType)
    {
        $this->container['caseType'] = $caseType;
        return $this;
    }

    /**
    * Gets isForbidden
    *  是否未禁用，1为未禁用，0为已禁用
    *
    * @return int|null
    */
    public function getIsForbidden()
    {
        return $this->container['isForbidden'];
    }

    /**
    * Sets isForbidden
    *
    * @param int|null $isForbidden 是否未禁用，1为未禁用，0为已禁用
    *
    * @return $this
    */
    public function setIsForbidden($isForbidden)
    {
        $this->container['isForbidden'] = $isForbidden;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets scriptUrl
    *  用例脚本路径
    *
    * @return string|null
    */
    public function getScriptUrl()
    {
        return $this->container['scriptUrl'];
    }

    /**
    * Sets scriptUrl
    *
    * @param string|null $scriptUrl 用例脚本路径
    *
    * @return $this
    */
    public function setScriptUrl($scriptUrl)
    {
        $this->container['scriptUrl'] = $scriptUrl;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CommonDto|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets testCaseName
    *  用例名称
    *
    * @return string|null
    */
    public function getTestCaseName()
    {
        return $this->container['testCaseName'];
    }

    /**
    * Sets testCaseName
    *
    * @param string|null $testCaseName 用例名称
    *
    * @return $this
    */
    public function setTestCaseName($testCaseName)
    {
        $this->container['testCaseName'] = $testCaseName;
        return $this;
    }

    /**
    * Gets testCaseNumber
    *  用例编号
    *
    * @return string|null
    */
    public function getTestCaseNumber()
    {
        return $this->container['testCaseNumber'];
    }

    /**
    * Sets testCaseNumber
    *
    * @param string|null $testCaseNumber 用例编号
    *
    * @return $this
    */
    public function setTestCaseNumber($testCaseNumber)
    {
        $this->container['testCaseNumber'] = $testCaseNumber;
        return $this;
    }

    /**
    * Gets tmssVersionUri
    *  tmss版本地址
    *
    * @return string|null
    */
    public function getTmssVersionUri()
    {
        return $this->container['tmssVersionUri'];
    }

    /**
    * Sets tmssVersionUri
    *
    * @param string|null $tmssVersionUri tmss版本地址
    *
    * @return $this
    */
    public function setTmssVersionUri($tmssVersionUri)
    {
        $this->container['tmssVersionUri'] = $tmssVersionUri;
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


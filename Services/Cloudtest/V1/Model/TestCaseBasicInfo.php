<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertTemplate  alertTemplate
    * caseType  tmss用例类型
    * executorType  执行机类型
    * id  用例id
    * isForbidden  是否收藏
    * name  用例id
    * number  用例编号
    * projectUpdateTime  用例包更新时间
    * scriptProjectName  用例包名
    * state  用例状态
    * svnScriptPath  svn脚本路径
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertTemplate' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate',
            'caseType' => 'int',
            'executorType' => 'string',
            'id' => 'string',
            'isForbidden' => 'bool',
            'name' => 'string',
            'number' => 'string',
            'projectUpdateTime' => 'int',
            'scriptProjectName' => 'string',
            'state' => 'int',
            'svnScriptPath' => 'string',
            'tmssVersionUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertTemplate  alertTemplate
    * caseType  tmss用例类型
    * executorType  执行机类型
    * id  用例id
    * isForbidden  是否收藏
    * name  用例id
    * number  用例编号
    * projectUpdateTime  用例包更新时间
    * scriptProjectName  用例包名
    * state  用例状态
    * svnScriptPath  svn脚本路径
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertTemplate' => null,
        'caseType' => 'int32',
        'executorType' => null,
        'id' => null,
        'isForbidden' => null,
        'name' => null,
        'number' => null,
        'projectUpdateTime' => 'int64',
        'scriptProjectName' => null,
        'state' => 'int32',
        'svnScriptPath' => null,
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
    * alertTemplate  alertTemplate
    * caseType  tmss用例类型
    * executorType  执行机类型
    * id  用例id
    * isForbidden  是否收藏
    * name  用例id
    * number  用例编号
    * projectUpdateTime  用例包更新时间
    * scriptProjectName  用例包名
    * state  用例状态
    * svnScriptPath  svn脚本路径
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertTemplate' => 'alert_template',
            'caseType' => 'caseType',
            'executorType' => 'executor_type',
            'id' => 'id',
            'isForbidden' => 'is_forbidden',
            'name' => 'name',
            'number' => 'number',
            'projectUpdateTime' => 'project_update_time',
            'scriptProjectName' => 'scriptProjectName',
            'state' => 'state',
            'svnScriptPath' => 'svn_script_path',
            'tmssVersionUri' => 'tmssVersionUri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertTemplate  alertTemplate
    * caseType  tmss用例类型
    * executorType  执行机类型
    * id  用例id
    * isForbidden  是否收藏
    * name  用例id
    * number  用例编号
    * projectUpdateTime  用例包更新时间
    * scriptProjectName  用例包名
    * state  用例状态
    * svnScriptPath  svn脚本路径
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $setters = [
            'alertTemplate' => 'setAlertTemplate',
            'caseType' => 'setCaseType',
            'executorType' => 'setExecutorType',
            'id' => 'setId',
            'isForbidden' => 'setIsForbidden',
            'name' => 'setName',
            'number' => 'setNumber',
            'projectUpdateTime' => 'setProjectUpdateTime',
            'scriptProjectName' => 'setScriptProjectName',
            'state' => 'setState',
            'svnScriptPath' => 'setSvnScriptPath',
            'tmssVersionUri' => 'setTmssVersionUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertTemplate  alertTemplate
    * caseType  tmss用例类型
    * executorType  执行机类型
    * id  用例id
    * isForbidden  是否收藏
    * name  用例id
    * number  用例编号
    * projectUpdateTime  用例包更新时间
    * scriptProjectName  用例包名
    * state  用例状态
    * svnScriptPath  svn脚本路径
    * tmssVersionUri  tmss版本地址
    *
    * @var string[]
    */
    protected static $getters = [
            'alertTemplate' => 'getAlertTemplate',
            'caseType' => 'getCaseType',
            'executorType' => 'getExecutorType',
            'id' => 'getId',
            'isForbidden' => 'getIsForbidden',
            'name' => 'getName',
            'number' => 'getNumber',
            'projectUpdateTime' => 'getProjectUpdateTime',
            'scriptProjectName' => 'getScriptProjectName',
            'state' => 'getState',
            'svnScriptPath' => 'getSvnScriptPath',
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
        $this->container['alertTemplate'] = isset($data['alertTemplate']) ? $data['alertTemplate'] : null;
        $this->container['caseType'] = isset($data['caseType']) ? $data['caseType'] : null;
        $this->container['executorType'] = isset($data['executorType']) ? $data['executorType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['projectUpdateTime'] = isset($data['projectUpdateTime']) ? $data['projectUpdateTime'] : null;
        $this->container['scriptProjectName'] = isset($data['scriptProjectName']) ? $data['scriptProjectName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['svnScriptPath'] = isset($data['svnScriptPath']) ? $data['svnScriptPath'] : null;
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
    * Gets alertTemplate
    *  alertTemplate
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate|null
    */
    public function getAlertTemplate()
    {
        return $this->container['alertTemplate'];
    }

    /**
    * Sets alertTemplate
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate|null $alertTemplate alertTemplate
    *
    * @return $this
    */
    public function setAlertTemplate($alertTemplate)
    {
        $this->container['alertTemplate'] = $alertTemplate;
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
    * Gets executorType
    *  执行机类型
    *
    * @return string|null
    */
    public function getExecutorType()
    {
        return $this->container['executorType'];
    }

    /**
    * Sets executorType
    *
    * @param string|null $executorType 执行机类型
    *
    * @return $this
    */
    public function setExecutorType($executorType)
    {
        $this->container['executorType'] = $executorType;
        return $this;
    }

    /**
    * Gets id
    *  用例id
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
    * @param string|null $id 用例id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isForbidden
    *  是否收藏
    *
    * @return bool|null
    */
    public function getIsForbidden()
    {
        return $this->container['isForbidden'];
    }

    /**
    * Sets isForbidden
    *
    * @param bool|null $isForbidden 是否收藏
    *
    * @return $this
    */
    public function setIsForbidden($isForbidden)
    {
        $this->container['isForbidden'] = $isForbidden;
        return $this;
    }

    /**
    * Gets name
    *  用例id
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
    * @param string|null $name 用例id
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets number
    *  用例编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 用例编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets projectUpdateTime
    *  用例包更新时间
    *
    * @return int|null
    */
    public function getProjectUpdateTime()
    {
        return $this->container['projectUpdateTime'];
    }

    /**
    * Sets projectUpdateTime
    *
    * @param int|null $projectUpdateTime 用例包更新时间
    *
    * @return $this
    */
    public function setProjectUpdateTime($projectUpdateTime)
    {
        $this->container['projectUpdateTime'] = $projectUpdateTime;
        return $this;
    }

    /**
    * Gets scriptProjectName
    *  用例包名
    *
    * @return string|null
    */
    public function getScriptProjectName()
    {
        return $this->container['scriptProjectName'];
    }

    /**
    * Sets scriptProjectName
    *
    * @param string|null $scriptProjectName 用例包名
    *
    * @return $this
    */
    public function setScriptProjectName($scriptProjectName)
    {
        $this->container['scriptProjectName'] = $scriptProjectName;
        return $this;
    }

    /**
    * Gets state
    *  用例状态
    *
    * @return int|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int|null $state 用例状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets svnScriptPath
    *  svn脚本路径
    *
    * @return string|null
    */
    public function getSvnScriptPath()
    {
        return $this->container['svnScriptPath'];
    }

    /**
    * Sets svnScriptPath
    *
    * @param string|null $svnScriptPath svn脚本路径
    *
    * @return $this
    */
    public function setSvnScriptPath($svnScriptPath)
    {
        $this->container['svnScriptPath'] = $svnScriptPath;
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


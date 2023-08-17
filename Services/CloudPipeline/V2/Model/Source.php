<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Source implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Source';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codehubName  源码仓名字
    * branches  触发分支
    * scmType  源码仓来源
    * hookFlag  是否开启触发执行流水线功能
    * branch  触发分支
    * gitUrl  源码仓ssh地址
    * codehubId  源码仓ID
    * webUrl  源码仓首页url
    * branchList  分支列表
    * initId  初始化ID
    * disable  是否废弃
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codehubName' => 'string',
            'branches' => 'string[]',
            'scmType' => 'string',
            'hookFlag' => 'bool',
            'branch' => 'string',
            'gitUrl' => 'string',
            'codehubId' => 'string',
            'webUrl' => 'string',
            'branchList' => 'string[]',
            'initId' => 'string',
            'disable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codehubName  源码仓名字
    * branches  触发分支
    * scmType  源码仓来源
    * hookFlag  是否开启触发执行流水线功能
    * branch  触发分支
    * gitUrl  源码仓ssh地址
    * codehubId  源码仓ID
    * webUrl  源码仓首页url
    * branchList  分支列表
    * initId  初始化ID
    * disable  是否废弃
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codehubName' => null,
        'branches' => null,
        'scmType' => null,
        'hookFlag' => null,
        'branch' => null,
        'gitUrl' => null,
        'codehubId' => null,
        'webUrl' => null,
        'branchList' => null,
        'initId' => null,
        'disable' => null
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
    * codehubName  源码仓名字
    * branches  触发分支
    * scmType  源码仓来源
    * hookFlag  是否开启触发执行流水线功能
    * branch  触发分支
    * gitUrl  源码仓ssh地址
    * codehubId  源码仓ID
    * webUrl  源码仓首页url
    * branchList  分支列表
    * initId  初始化ID
    * disable  是否废弃
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codehubName' => 'codehub_name',
            'branches' => 'branches',
            'scmType' => 'scm_type',
            'hookFlag' => 'hook_flag',
            'branch' => 'branch',
            'gitUrl' => 'git_url',
            'codehubId' => 'codehub_id',
            'webUrl' => 'web_url',
            'branchList' => 'branch_list',
            'initId' => 'init_id',
            'disable' => 'disable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codehubName  源码仓名字
    * branches  触发分支
    * scmType  源码仓来源
    * hookFlag  是否开启触发执行流水线功能
    * branch  触发分支
    * gitUrl  源码仓ssh地址
    * codehubId  源码仓ID
    * webUrl  源码仓首页url
    * branchList  分支列表
    * initId  初始化ID
    * disable  是否废弃
    *
    * @var string[]
    */
    protected static $setters = [
            'codehubName' => 'setCodehubName',
            'branches' => 'setBranches',
            'scmType' => 'setScmType',
            'hookFlag' => 'setHookFlag',
            'branch' => 'setBranch',
            'gitUrl' => 'setGitUrl',
            'codehubId' => 'setCodehubId',
            'webUrl' => 'setWebUrl',
            'branchList' => 'setBranchList',
            'initId' => 'setInitId',
            'disable' => 'setDisable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codehubName  源码仓名字
    * branches  触发分支
    * scmType  源码仓来源
    * hookFlag  是否开启触发执行流水线功能
    * branch  触发分支
    * gitUrl  源码仓ssh地址
    * codehubId  源码仓ID
    * webUrl  源码仓首页url
    * branchList  分支列表
    * initId  初始化ID
    * disable  是否废弃
    *
    * @var string[]
    */
    protected static $getters = [
            'codehubName' => 'getCodehubName',
            'branches' => 'getBranches',
            'scmType' => 'getScmType',
            'hookFlag' => 'getHookFlag',
            'branch' => 'getBranch',
            'gitUrl' => 'getGitUrl',
            'codehubId' => 'getCodehubId',
            'webUrl' => 'getWebUrl',
            'branchList' => 'getBranchList',
            'initId' => 'getInitId',
            'disable' => 'getDisable'
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
        $this->container['codehubName'] = isset($data['codehubName']) ? $data['codehubName'] : null;
        $this->container['branches'] = isset($data['branches']) ? $data['branches'] : null;
        $this->container['scmType'] = isset($data['scmType']) ? $data['scmType'] : null;
        $this->container['hookFlag'] = isset($data['hookFlag']) ? $data['hookFlag'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['codehubId'] = isset($data['codehubId']) ? $data['codehubId'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['branchList'] = isset($data['branchList']) ? $data['branchList'] : null;
        $this->container['initId'] = isset($data['initId']) ? $data['initId'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['codehubName'] === null) {
            $invalidProperties[] = "'codehubName' can't be null";
        }
        if ($this->container['branches'] === null) {
            $invalidProperties[] = "'branches' can't be null";
        }
        if ($this->container['scmType'] === null) {
            $invalidProperties[] = "'scmType' can't be null";
        }
        if ($this->container['hookFlag'] === null) {
            $invalidProperties[] = "'hookFlag' can't be null";
        }
        if ($this->container['branch'] === null) {
            $invalidProperties[] = "'branch' can't be null";
        }
        if ($this->container['gitUrl'] === null) {
            $invalidProperties[] = "'gitUrl' can't be null";
        }
        if ($this->container['codehubId'] === null) {
            $invalidProperties[] = "'codehubId' can't be null";
        }
        if ($this->container['webUrl'] === null) {
            $invalidProperties[] = "'webUrl' can't be null";
        }
        if ($this->container['branchList'] === null) {
            $invalidProperties[] = "'branchList' can't be null";
        }
        if ($this->container['initId'] === null) {
            $invalidProperties[] = "'initId' can't be null";
        }
        if ($this->container['disable'] === null) {
            $invalidProperties[] = "'disable' can't be null";
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
    * Gets codehubName
    *  源码仓名字
    *
    * @return string
    */
    public function getCodehubName()
    {
        return $this->container['codehubName'];
    }

    /**
    * Sets codehubName
    *
    * @param string $codehubName 源码仓名字
    *
    * @return $this
    */
    public function setCodehubName($codehubName)
    {
        $this->container['codehubName'] = $codehubName;
        return $this;
    }

    /**
    * Gets branches
    *  触发分支
    *
    * @return string[]
    */
    public function getBranches()
    {
        return $this->container['branches'];
    }

    /**
    * Sets branches
    *
    * @param string[] $branches 触发分支
    *
    * @return $this
    */
    public function setBranches($branches)
    {
        $this->container['branches'] = $branches;
        return $this;
    }

    /**
    * Gets scmType
    *  源码仓来源
    *
    * @return string
    */
    public function getScmType()
    {
        return $this->container['scmType'];
    }

    /**
    * Sets scmType
    *
    * @param string $scmType 源码仓来源
    *
    * @return $this
    */
    public function setScmType($scmType)
    {
        $this->container['scmType'] = $scmType;
        return $this;
    }

    /**
    * Gets hookFlag
    *  是否开启触发执行流水线功能
    *
    * @return bool
    */
    public function getHookFlag()
    {
        return $this->container['hookFlag'];
    }

    /**
    * Sets hookFlag
    *
    * @param bool $hookFlag 是否开启触发执行流水线功能
    *
    * @return $this
    */
    public function setHookFlag($hookFlag)
    {
        $this->container['hookFlag'] = $hookFlag;
        return $this;
    }

    /**
    * Gets branch
    *  触发分支
    *
    * @return string
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string $branch 触发分支
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets gitUrl
    *  源码仓ssh地址
    *
    * @return string
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string $gitUrl 源码仓ssh地址
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets codehubId
    *  源码仓ID
    *
    * @return string
    */
    public function getCodehubId()
    {
        return $this->container['codehubId'];
    }

    /**
    * Sets codehubId
    *
    * @param string $codehubId 源码仓ID
    *
    * @return $this
    */
    public function setCodehubId($codehubId)
    {
        $this->container['codehubId'] = $codehubId;
        return $this;
    }

    /**
    * Gets webUrl
    *  源码仓首页url
    *
    * @return string
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string $webUrl 源码仓首页url
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets branchList
    *  分支列表
    *
    * @return string[]
    */
    public function getBranchList()
    {
        return $this->container['branchList'];
    }

    /**
    * Sets branchList
    *
    * @param string[] $branchList 分支列表
    *
    * @return $this
    */
    public function setBranchList($branchList)
    {
        $this->container['branchList'] = $branchList;
        return $this;
    }

    /**
    * Gets initId
    *  初始化ID
    *
    * @return string
    */
    public function getInitId()
    {
        return $this->container['initId'];
    }

    /**
    * Sets initId
    *
    * @param string $initId 初始化ID
    *
    * @return $this
    */
    public function setInitId($initId)
    {
        $this->container['initId'] = $initId;
        return $this;
    }

    /**
    * Gets disable
    *  是否废弃
    *
    * @return bool
    */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
    * Sets disable
    *
    * @param bool $disable 是否废弃
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
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


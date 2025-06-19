<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequirementOverviewVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequirementOverviewVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  需求名称
    * workitemId  需求id
    * sequenceId  需求序列编号
    * boardId  看板需求id
    * trackerId  需求类型id
    * trackerName  需求类型
    * relateCaseNumber  需求关联用例总数
    * casePassVo  casePassVo
    * caseExecuteVo  caseExecuteVo
    * relateDefectNumber  需求关联缺陷总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'workitemId' => 'string',
            'sequenceId' => 'string',
            'boardId' => 'string',
            'trackerId' => 'string',
            'trackerName' => 'string',
            'relateCaseNumber' => 'int',
            'casePassVo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CasePassVo',
            'caseExecuteVo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CaseExecuteVo',
            'relateDefectNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  需求名称
    * workitemId  需求id
    * sequenceId  需求序列编号
    * boardId  看板需求id
    * trackerId  需求类型id
    * trackerName  需求类型
    * relateCaseNumber  需求关联用例总数
    * casePassVo  casePassVo
    * caseExecuteVo  caseExecuteVo
    * relateDefectNumber  需求关联缺陷总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'workitemId' => null,
        'sequenceId' => null,
        'boardId' => null,
        'trackerId' => null,
        'trackerName' => null,
        'relateCaseNumber' => 'int32',
        'casePassVo' => null,
        'caseExecuteVo' => null,
        'relateDefectNumber' => 'int32'
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
    * name  需求名称
    * workitemId  需求id
    * sequenceId  需求序列编号
    * boardId  看板需求id
    * trackerId  需求类型id
    * trackerName  需求类型
    * relateCaseNumber  需求关联用例总数
    * casePassVo  casePassVo
    * caseExecuteVo  caseExecuteVo
    * relateDefectNumber  需求关联缺陷总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'workitemId' => 'workitem_id',
            'sequenceId' => 'sequence_id',
            'boardId' => 'board_id',
            'trackerId' => 'tracker_id',
            'trackerName' => 'tracker_name',
            'relateCaseNumber' => 'relate_case_number',
            'casePassVo' => 'case_pass_vo',
            'caseExecuteVo' => 'case_execute_vo',
            'relateDefectNumber' => 'relate_defect_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  需求名称
    * workitemId  需求id
    * sequenceId  需求序列编号
    * boardId  看板需求id
    * trackerId  需求类型id
    * trackerName  需求类型
    * relateCaseNumber  需求关联用例总数
    * casePassVo  casePassVo
    * caseExecuteVo  caseExecuteVo
    * relateDefectNumber  需求关联缺陷总数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'workitemId' => 'setWorkitemId',
            'sequenceId' => 'setSequenceId',
            'boardId' => 'setBoardId',
            'trackerId' => 'setTrackerId',
            'trackerName' => 'setTrackerName',
            'relateCaseNumber' => 'setRelateCaseNumber',
            'casePassVo' => 'setCasePassVo',
            'caseExecuteVo' => 'setCaseExecuteVo',
            'relateDefectNumber' => 'setRelateDefectNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  需求名称
    * workitemId  需求id
    * sequenceId  需求序列编号
    * boardId  看板需求id
    * trackerId  需求类型id
    * trackerName  需求类型
    * relateCaseNumber  需求关联用例总数
    * casePassVo  casePassVo
    * caseExecuteVo  caseExecuteVo
    * relateDefectNumber  需求关联缺陷总数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'workitemId' => 'getWorkitemId',
            'sequenceId' => 'getSequenceId',
            'boardId' => 'getBoardId',
            'trackerId' => 'getTrackerId',
            'trackerName' => 'getTrackerName',
            'relateCaseNumber' => 'getRelateCaseNumber',
            'casePassVo' => 'getCasePassVo',
            'caseExecuteVo' => 'getCaseExecuteVo',
            'relateDefectNumber' => 'getRelateDefectNumber'
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
        $this->container['workitemId'] = isset($data['workitemId']) ? $data['workitemId'] : null;
        $this->container['sequenceId'] = isset($data['sequenceId']) ? $data['sequenceId'] : null;
        $this->container['boardId'] = isset($data['boardId']) ? $data['boardId'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['trackerName'] = isset($data['trackerName']) ? $data['trackerName'] : null;
        $this->container['relateCaseNumber'] = isset($data['relateCaseNumber']) ? $data['relateCaseNumber'] : null;
        $this->container['casePassVo'] = isset($data['casePassVo']) ? $data['casePassVo'] : null;
        $this->container['caseExecuteVo'] = isset($data['caseExecuteVo']) ? $data['caseExecuteVo'] : null;
        $this->container['relateDefectNumber'] = isset($data['relateDefectNumber']) ? $data['relateDefectNumber'] : null;
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
    * Gets name
    *  需求名称
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
    * @param string|null $name 需求名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets workitemId
    *  需求id
    *
    * @return string|null
    */
    public function getWorkitemId()
    {
        return $this->container['workitemId'];
    }

    /**
    * Sets workitemId
    *
    * @param string|null $workitemId 需求id
    *
    * @return $this
    */
    public function setWorkitemId($workitemId)
    {
        $this->container['workitemId'] = $workitemId;
        return $this;
    }

    /**
    * Gets sequenceId
    *  需求序列编号
    *
    * @return string|null
    */
    public function getSequenceId()
    {
        return $this->container['sequenceId'];
    }

    /**
    * Sets sequenceId
    *
    * @param string|null $sequenceId 需求序列编号
    *
    * @return $this
    */
    public function setSequenceId($sequenceId)
    {
        $this->container['sequenceId'] = $sequenceId;
        return $this;
    }

    /**
    * Gets boardId
    *  看板需求id
    *
    * @return string|null
    */
    public function getBoardId()
    {
        return $this->container['boardId'];
    }

    /**
    * Sets boardId
    *
    * @param string|null $boardId 看板需求id
    *
    * @return $this
    */
    public function setBoardId($boardId)
    {
        $this->container['boardId'] = $boardId;
        return $this;
    }

    /**
    * Gets trackerId
    *  需求类型id
    *
    * @return string|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param string|null $trackerId 需求类型id
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets trackerName
    *  需求类型
    *
    * @return string|null
    */
    public function getTrackerName()
    {
        return $this->container['trackerName'];
    }

    /**
    * Sets trackerName
    *
    * @param string|null $trackerName 需求类型
    *
    * @return $this
    */
    public function setTrackerName($trackerName)
    {
        $this->container['trackerName'] = $trackerName;
        return $this;
    }

    /**
    * Gets relateCaseNumber
    *  需求关联用例总数
    *
    * @return int|null
    */
    public function getRelateCaseNumber()
    {
        return $this->container['relateCaseNumber'];
    }

    /**
    * Sets relateCaseNumber
    *
    * @param int|null $relateCaseNumber 需求关联用例总数
    *
    * @return $this
    */
    public function setRelateCaseNumber($relateCaseNumber)
    {
        $this->container['relateCaseNumber'] = $relateCaseNumber;
        return $this;
    }

    /**
    * Gets casePassVo
    *  casePassVo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CasePassVo|null
    */
    public function getCasePassVo()
    {
        return $this->container['casePassVo'];
    }

    /**
    * Sets casePassVo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CasePassVo|null $casePassVo casePassVo
    *
    * @return $this
    */
    public function setCasePassVo($casePassVo)
    {
        $this->container['casePassVo'] = $casePassVo;
        return $this;
    }

    /**
    * Gets caseExecuteVo
    *  caseExecuteVo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseExecuteVo|null
    */
    public function getCaseExecuteVo()
    {
        return $this->container['caseExecuteVo'];
    }

    /**
    * Sets caseExecuteVo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CaseExecuteVo|null $caseExecuteVo caseExecuteVo
    *
    * @return $this
    */
    public function setCaseExecuteVo($caseExecuteVo)
    {
        $this->container['caseExecuteVo'] = $caseExecuteVo;
        return $this;
    }

    /**
    * Gets relateDefectNumber
    *  需求关联缺陷总数
    *
    * @return int|null
    */
    public function getRelateDefectNumber()
    {
        return $this->container['relateDefectNumber'];
    }

    /**
    * Sets relateDefectNumber
    *
    * @param int|null $relateDefectNumber 需求关联缺陷总数
    *
    * @return $this
    */
    public function setRelateDefectNumber($relateDefectNumber)
    {
        $this->container['relateDefectNumber'] = $relateDefectNumber;
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


<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeptAndChildDeptResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeptAndChildDeptResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * corpId  企业ID。
    * deptCode  部门编码。
    * deptLevel  部门层级。
    * deptName  部门名称。
    * deptNamePath  部门名路径。
    * isLeafNode  是否叶子节点。
    * parentDeptCode  父部门编码。
    * deptCodePath  部门编码路径。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。
    * outPermission  该部门下用户访问权限控制。
    * designatedOutDeptCodes  允许访问的部门列表。
    * childDepts  子部门列表。
    * sortLevel  部门排序号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'corpId' => 'string',
            'deptCode' => 'string',
            'deptLevel' => 'int',
            'deptName' => 'string',
            'deptNamePath' => 'string',
            'isLeafNode' => 'bool',
            'parentDeptCode' => 'string',
            'deptCodePath' => 'string',
            'note' => 'string',
            'inPermission' => 'string',
            'outPermission' => 'string',
            'designatedOutDeptCodes' => '\HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO[]',
            'childDepts' => '\HuaweiCloud\SDK\Meeting\V1\Model\QueryDeptResultDTO[]',
            'sortLevel' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * corpId  企业ID。
    * deptCode  部门编码。
    * deptLevel  部门层级。
    * deptName  部门名称。
    * deptNamePath  部门名路径。
    * isLeafNode  是否叶子节点。
    * parentDeptCode  父部门编码。
    * deptCodePath  部门编码路径。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。
    * outPermission  该部门下用户访问权限控制。
    * designatedOutDeptCodes  允许访问的部门列表。
    * childDepts  子部门列表。
    * sortLevel  部门排序号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'corpId' => null,
        'deptCode' => null,
        'deptLevel' => null,
        'deptName' => null,
        'deptNamePath' => null,
        'isLeafNode' => null,
        'parentDeptCode' => null,
        'deptCodePath' => null,
        'note' => null,
        'inPermission' => null,
        'outPermission' => null,
        'designatedOutDeptCodes' => null,
        'childDepts' => null,
        'sortLevel' => null
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
    * corpId  企业ID。
    * deptCode  部门编码。
    * deptLevel  部门层级。
    * deptName  部门名称。
    * deptNamePath  部门名路径。
    * isLeafNode  是否叶子节点。
    * parentDeptCode  父部门编码。
    * deptCodePath  部门编码路径。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。
    * outPermission  该部门下用户访问权限控制。
    * designatedOutDeptCodes  允许访问的部门列表。
    * childDepts  子部门列表。
    * sortLevel  部门排序号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'corpId' => 'corpId',
            'deptCode' => 'deptCode',
            'deptLevel' => 'deptLevel',
            'deptName' => 'deptName',
            'deptNamePath' => 'deptNamePath',
            'isLeafNode' => 'isLeafNode',
            'parentDeptCode' => 'parentDeptCode',
            'deptCodePath' => 'deptCodePath',
            'note' => 'note',
            'inPermission' => 'inPermission',
            'outPermission' => 'outPermission',
            'designatedOutDeptCodes' => 'designatedOutDeptCodes',
            'childDepts' => 'childDepts',
            'sortLevel' => 'sortLevel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * corpId  企业ID。
    * deptCode  部门编码。
    * deptLevel  部门层级。
    * deptName  部门名称。
    * deptNamePath  部门名路径。
    * isLeafNode  是否叶子节点。
    * parentDeptCode  父部门编码。
    * deptCodePath  部门编码路径。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。
    * outPermission  该部门下用户访问权限控制。
    * designatedOutDeptCodes  允许访问的部门列表。
    * childDepts  子部门列表。
    * sortLevel  部门排序号。
    *
    * @var string[]
    */
    protected static $setters = [
            'corpId' => 'setCorpId',
            'deptCode' => 'setDeptCode',
            'deptLevel' => 'setDeptLevel',
            'deptName' => 'setDeptName',
            'deptNamePath' => 'setDeptNamePath',
            'isLeafNode' => 'setIsLeafNode',
            'parentDeptCode' => 'setParentDeptCode',
            'deptCodePath' => 'setDeptCodePath',
            'note' => 'setNote',
            'inPermission' => 'setInPermission',
            'outPermission' => 'setOutPermission',
            'designatedOutDeptCodes' => 'setDesignatedOutDeptCodes',
            'childDepts' => 'setChildDepts',
            'sortLevel' => 'setSortLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * corpId  企业ID。
    * deptCode  部门编码。
    * deptLevel  部门层级。
    * deptName  部门名称。
    * deptNamePath  部门名路径。
    * isLeafNode  是否叶子节点。
    * parentDeptCode  父部门编码。
    * deptCodePath  部门编码路径。
    * note  备注。
    * inPermission  其他用户对该部门下用户的访问权限。
    * outPermission  该部门下用户访问权限控制。
    * designatedOutDeptCodes  允许访问的部门列表。
    * childDepts  子部门列表。
    * sortLevel  部门排序号。
    *
    * @var string[]
    */
    protected static $getters = [
            'corpId' => 'getCorpId',
            'deptCode' => 'getDeptCode',
            'deptLevel' => 'getDeptLevel',
            'deptName' => 'getDeptName',
            'deptNamePath' => 'getDeptNamePath',
            'isLeafNode' => 'getIsLeafNode',
            'parentDeptCode' => 'getParentDeptCode',
            'deptCodePath' => 'getDeptCodePath',
            'note' => 'getNote',
            'inPermission' => 'getInPermission',
            'outPermission' => 'getOutPermission',
            'designatedOutDeptCodes' => 'getDesignatedOutDeptCodes',
            'childDepts' => 'getChildDepts',
            'sortLevel' => 'getSortLevel'
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
        $this->container['corpId'] = isset($data['corpId']) ? $data['corpId'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['deptLevel'] = isset($data['deptLevel']) ? $data['deptLevel'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['deptNamePath'] = isset($data['deptNamePath']) ? $data['deptNamePath'] : null;
        $this->container['isLeafNode'] = isset($data['isLeafNode']) ? $data['isLeafNode'] : null;
        $this->container['parentDeptCode'] = isset($data['parentDeptCode']) ? $data['parentDeptCode'] : null;
        $this->container['deptCodePath'] = isset($data['deptCodePath']) ? $data['deptCodePath'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['inPermission'] = isset($data['inPermission']) ? $data['inPermission'] : null;
        $this->container['outPermission'] = isset($data['outPermission']) ? $data['outPermission'] : null;
        $this->container['designatedOutDeptCodes'] = isset($data['designatedOutDeptCodes']) ? $data['designatedOutDeptCodes'] : null;
        $this->container['childDepts'] = isset($data['childDepts']) ? $data['childDepts'] : null;
        $this->container['sortLevel'] = isset($data['sortLevel']) ? $data['sortLevel'] : null;
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
    * Gets corpId
    *  企业ID。
    *
    * @return string|null
    */
    public function getCorpId()
    {
        return $this->container['corpId'];
    }

    /**
    * Sets corpId
    *
    * @param string|null $corpId 企业ID。
    *
    * @return $this
    */
    public function setCorpId($corpId)
    {
        $this->container['corpId'] = $corpId;
        return $this;
    }

    /**
    * Gets deptCode
    *  部门编码。
    *
    * @return string|null
    */
    public function getDeptCode()
    {
        return $this->container['deptCode'];
    }

    /**
    * Sets deptCode
    *
    * @param string|null $deptCode 部门编码。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets deptLevel
    *  部门层级。
    *
    * @return int|null
    */
    public function getDeptLevel()
    {
        return $this->container['deptLevel'];
    }

    /**
    * Sets deptLevel
    *
    * @param int|null $deptLevel 部门层级。
    *
    * @return $this
    */
    public function setDeptLevel($deptLevel)
    {
        $this->container['deptLevel'] = $deptLevel;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName 部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets deptNamePath
    *  部门名路径。
    *
    * @return string|null
    */
    public function getDeptNamePath()
    {
        return $this->container['deptNamePath'];
    }

    /**
    * Sets deptNamePath
    *
    * @param string|null $deptNamePath 部门名路径。
    *
    * @return $this
    */
    public function setDeptNamePath($deptNamePath)
    {
        $this->container['deptNamePath'] = $deptNamePath;
        return $this;
    }

    /**
    * Gets isLeafNode
    *  是否叶子节点。
    *
    * @return bool|null
    */
    public function getIsLeafNode()
    {
        return $this->container['isLeafNode'];
    }

    /**
    * Sets isLeafNode
    *
    * @param bool|null $isLeafNode 是否叶子节点。
    *
    * @return $this
    */
    public function setIsLeafNode($isLeafNode)
    {
        $this->container['isLeafNode'] = $isLeafNode;
        return $this;
    }

    /**
    * Gets parentDeptCode
    *  父部门编码。
    *
    * @return string|null
    */
    public function getParentDeptCode()
    {
        return $this->container['parentDeptCode'];
    }

    /**
    * Sets parentDeptCode
    *
    * @param string|null $parentDeptCode 父部门编码。
    *
    * @return $this
    */
    public function setParentDeptCode($parentDeptCode)
    {
        $this->container['parentDeptCode'] = $parentDeptCode;
        return $this;
    }

    /**
    * Gets deptCodePath
    *  部门编码路径。
    *
    * @return string|null
    */
    public function getDeptCodePath()
    {
        return $this->container['deptCodePath'];
    }

    /**
    * Sets deptCodePath
    *
    * @param string|null $deptCodePath 部门编码路径。
    *
    * @return $this
    */
    public function setDeptCodePath($deptCodePath)
    {
        $this->container['deptCodePath'] = $deptCodePath;
        return $this;
    }

    /**
    * Gets note
    *  备注。
    *
    * @return string|null
    */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
    * Sets note
    *
    * @param string|null $note 备注。
    *
    * @return $this
    */
    public function setNote($note)
    {
        $this->container['note'] = $note;
        return $this;
    }

    /**
    * Gets inPermission
    *  其他用户对该部门下用户的访问权限。
    *
    * @return string|null
    */
    public function getInPermission()
    {
        return $this->container['inPermission'];
    }

    /**
    * Sets inPermission
    *
    * @param string|null $inPermission 其他用户对该部门下用户的访问权限。
    *
    * @return $this
    */
    public function setInPermission($inPermission)
    {
        $this->container['inPermission'] = $inPermission;
        return $this;
    }

    /**
    * Gets outPermission
    *  该部门下用户访问权限控制。
    *
    * @return string|null
    */
    public function getOutPermission()
    {
        return $this->container['outPermission'];
    }

    /**
    * Sets outPermission
    *
    * @param string|null $outPermission 该部门下用户访问权限控制。
    *
    * @return $this
    */
    public function setOutPermission($outPermission)
    {
        $this->container['outPermission'] = $outPermission;
        return $this;
    }

    /**
    * Gets designatedOutDeptCodes
    *  允许访问的部门列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO[]|null
    */
    public function getDesignatedOutDeptCodes()
    {
        return $this->container['designatedOutDeptCodes'];
    }

    /**
    * Sets designatedOutDeptCodes
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO[]|null $designatedOutDeptCodes 允许访问的部门列表。
    *
    * @return $this
    */
    public function setDesignatedOutDeptCodes($designatedOutDeptCodes)
    {
        $this->container['designatedOutDeptCodes'] = $designatedOutDeptCodes;
        return $this;
    }

    /**
    * Gets childDepts
    *  子部门列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QueryDeptResultDTO[]|null
    */
    public function getChildDepts()
    {
        return $this->container['childDepts'];
    }

    /**
    * Sets childDepts
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QueryDeptResultDTO[]|null $childDepts 子部门列表。
    *
    * @return $this
    */
    public function setChildDepts($childDepts)
    {
        $this->container['childDepts'] = $childDepts;
        return $this;
    }

    /**
    * Gets sortLevel
    *  部门排序号。
    *
    * @return int|null
    */
    public function getSortLevel()
    {
        return $this->container['sortLevel'];
    }

    /**
    * Sets sortLevel
    *
    * @param int|null $sortLevel 部门排序号。
    *
    * @return $this
    */
    public function setSortLevel($sortLevel)
    {
        $this->container['sortLevel'] = $sortLevel;
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


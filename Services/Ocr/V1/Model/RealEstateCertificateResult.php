<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealEstateCertificateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RealEstateCertificateResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issuer  填发单位。
    * issueDate  填发日期。
    * realEstateCertificateNo  不动产证编号。
    * mortgageSeals  抵押印章个数。
    * canceledMortgageSeals  注销的抵押印章个数。
    * estateLocation  房屋坐落。
    * totalFloors  总楼层数。
    * floor  所在层。
    * yearBuilt  建成年份。
    * structure  结构。
    * area  建筑面积。
    * revenueStamps  印花税票个数。
    * ownershipCertificateNo  产权证号。
    * estateHolder  房屋所有权人。
    * obligee  权利人。
    * ownership  共有情况。
    * propertyUnitNo  不动产单元号。
    * rightType  权利类型。
    * rightNature  权利性质。
    * usage  使用用途。
    * intendedUsage  设计、规划用途。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issuer' => 'string',
            'issueDate' => 'string',
            'realEstateCertificateNo' => 'string',
            'mortgageSeals' => 'int',
            'canceledMortgageSeals' => 'int',
            'estateLocation' => 'string',
            'totalFloors' => 'string',
            'floor' => 'string',
            'yearBuilt' => 'string',
            'structure' => 'string',
            'area' => 'string',
            'revenueStamps' => 'int',
            'ownershipCertificateNo' => 'string',
            'estateHolder' => 'string',
            'obligee' => 'string',
            'ownership' => 'string',
            'propertyUnitNo' => 'string',
            'rightType' => 'string',
            'rightNature' => 'string',
            'usage' => 'string',
            'intendedUsage' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issuer  填发单位。
    * issueDate  填发日期。
    * realEstateCertificateNo  不动产证编号。
    * mortgageSeals  抵押印章个数。
    * canceledMortgageSeals  注销的抵押印章个数。
    * estateLocation  房屋坐落。
    * totalFloors  总楼层数。
    * floor  所在层。
    * yearBuilt  建成年份。
    * structure  结构。
    * area  建筑面积。
    * revenueStamps  印花税票个数。
    * ownershipCertificateNo  产权证号。
    * estateHolder  房屋所有权人。
    * obligee  权利人。
    * ownership  共有情况。
    * propertyUnitNo  不动产单元号。
    * rightType  权利类型。
    * rightNature  权利性质。
    * usage  使用用途。
    * intendedUsage  设计、规划用途。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issuer' => null,
        'issueDate' => null,
        'realEstateCertificateNo' => null,
        'mortgageSeals' => 'int32',
        'canceledMortgageSeals' => 'int32',
        'estateLocation' => null,
        'totalFloors' => null,
        'floor' => null,
        'yearBuilt' => null,
        'structure' => null,
        'area' => null,
        'revenueStamps' => 'int32',
        'ownershipCertificateNo' => null,
        'estateHolder' => null,
        'obligee' => null,
        'ownership' => null,
        'propertyUnitNo' => null,
        'rightType' => null,
        'rightNature' => null,
        'usage' => null,
        'intendedUsage' => null,
        'confidence' => null
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
    * issuer  填发单位。
    * issueDate  填发日期。
    * realEstateCertificateNo  不动产证编号。
    * mortgageSeals  抵押印章个数。
    * canceledMortgageSeals  注销的抵押印章个数。
    * estateLocation  房屋坐落。
    * totalFloors  总楼层数。
    * floor  所在层。
    * yearBuilt  建成年份。
    * structure  结构。
    * area  建筑面积。
    * revenueStamps  印花税票个数。
    * ownershipCertificateNo  产权证号。
    * estateHolder  房屋所有权人。
    * obligee  权利人。
    * ownership  共有情况。
    * propertyUnitNo  不动产单元号。
    * rightType  权利类型。
    * rightNature  权利性质。
    * usage  使用用途。
    * intendedUsage  设计、规划用途。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issuer' => 'issuer',
            'issueDate' => 'issue_date',
            'realEstateCertificateNo' => 'real_estate_certificate_no',
            'mortgageSeals' => 'mortgage_seals',
            'canceledMortgageSeals' => 'canceled_mortgage_seals',
            'estateLocation' => 'estate_location',
            'totalFloors' => 'total_floors',
            'floor' => 'floor',
            'yearBuilt' => 'year_built',
            'structure' => 'structure',
            'area' => 'area',
            'revenueStamps' => 'revenue_stamps',
            'ownershipCertificateNo' => 'ownership_certificate_no',
            'estateHolder' => 'estate_holder',
            'obligee' => 'obligee',
            'ownership' => 'ownership',
            'propertyUnitNo' => 'property_unit_no',
            'rightType' => 'right_type',
            'rightNature' => 'right_nature',
            'usage' => 'usage',
            'intendedUsage' => 'intended_usage',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issuer  填发单位。
    * issueDate  填发日期。
    * realEstateCertificateNo  不动产证编号。
    * mortgageSeals  抵押印章个数。
    * canceledMortgageSeals  注销的抵押印章个数。
    * estateLocation  房屋坐落。
    * totalFloors  总楼层数。
    * floor  所在层。
    * yearBuilt  建成年份。
    * structure  结构。
    * area  建筑面积。
    * revenueStamps  印花税票个数。
    * ownershipCertificateNo  产权证号。
    * estateHolder  房屋所有权人。
    * obligee  权利人。
    * ownership  共有情况。
    * propertyUnitNo  不动产单元号。
    * rightType  权利类型。
    * rightNature  权利性质。
    * usage  使用用途。
    * intendedUsage  设计、规划用途。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'issuer' => 'setIssuer',
            'issueDate' => 'setIssueDate',
            'realEstateCertificateNo' => 'setRealEstateCertificateNo',
            'mortgageSeals' => 'setMortgageSeals',
            'canceledMortgageSeals' => 'setCanceledMortgageSeals',
            'estateLocation' => 'setEstateLocation',
            'totalFloors' => 'setTotalFloors',
            'floor' => 'setFloor',
            'yearBuilt' => 'setYearBuilt',
            'structure' => 'setStructure',
            'area' => 'setArea',
            'revenueStamps' => 'setRevenueStamps',
            'ownershipCertificateNo' => 'setOwnershipCertificateNo',
            'estateHolder' => 'setEstateHolder',
            'obligee' => 'setObligee',
            'ownership' => 'setOwnership',
            'propertyUnitNo' => 'setPropertyUnitNo',
            'rightType' => 'setRightType',
            'rightNature' => 'setRightNature',
            'usage' => 'setUsage',
            'intendedUsage' => 'setIntendedUsage',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issuer  填发单位。
    * issueDate  填发日期。
    * realEstateCertificateNo  不动产证编号。
    * mortgageSeals  抵押印章个数。
    * canceledMortgageSeals  注销的抵押印章个数。
    * estateLocation  房屋坐落。
    * totalFloors  总楼层数。
    * floor  所在层。
    * yearBuilt  建成年份。
    * structure  结构。
    * area  建筑面积。
    * revenueStamps  印花税票个数。
    * ownershipCertificateNo  产权证号。
    * estateHolder  房屋所有权人。
    * obligee  权利人。
    * ownership  共有情况。
    * propertyUnitNo  不动产单元号。
    * rightType  权利类型。
    * rightNature  权利性质。
    * usage  使用用途。
    * intendedUsage  设计、规划用途。
    * confidence  各个字段的置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'issuer' => 'getIssuer',
            'issueDate' => 'getIssueDate',
            'realEstateCertificateNo' => 'getRealEstateCertificateNo',
            'mortgageSeals' => 'getMortgageSeals',
            'canceledMortgageSeals' => 'getCanceledMortgageSeals',
            'estateLocation' => 'getEstateLocation',
            'totalFloors' => 'getTotalFloors',
            'floor' => 'getFloor',
            'yearBuilt' => 'getYearBuilt',
            'structure' => 'getStructure',
            'area' => 'getArea',
            'revenueStamps' => 'getRevenueStamps',
            'ownershipCertificateNo' => 'getOwnershipCertificateNo',
            'estateHolder' => 'getEstateHolder',
            'obligee' => 'getObligee',
            'ownership' => 'getOwnership',
            'propertyUnitNo' => 'getPropertyUnitNo',
            'rightType' => 'getRightType',
            'rightNature' => 'getRightNature',
            'usage' => 'getUsage',
            'intendedUsage' => 'getIntendedUsage',
            'confidence' => 'getConfidence'
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
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['realEstateCertificateNo'] = isset($data['realEstateCertificateNo']) ? $data['realEstateCertificateNo'] : null;
        $this->container['mortgageSeals'] = isset($data['mortgageSeals']) ? $data['mortgageSeals'] : null;
        $this->container['canceledMortgageSeals'] = isset($data['canceledMortgageSeals']) ? $data['canceledMortgageSeals'] : null;
        $this->container['estateLocation'] = isset($data['estateLocation']) ? $data['estateLocation'] : null;
        $this->container['totalFloors'] = isset($data['totalFloors']) ? $data['totalFloors'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['yearBuilt'] = isset($data['yearBuilt']) ? $data['yearBuilt'] : null;
        $this->container['structure'] = isset($data['structure']) ? $data['structure'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['revenueStamps'] = isset($data['revenueStamps']) ? $data['revenueStamps'] : null;
        $this->container['ownershipCertificateNo'] = isset($data['ownershipCertificateNo']) ? $data['ownershipCertificateNo'] : null;
        $this->container['estateHolder'] = isset($data['estateHolder']) ? $data['estateHolder'] : null;
        $this->container['obligee'] = isset($data['obligee']) ? $data['obligee'] : null;
        $this->container['ownership'] = isset($data['ownership']) ? $data['ownership'] : null;
        $this->container['propertyUnitNo'] = isset($data['propertyUnitNo']) ? $data['propertyUnitNo'] : null;
        $this->container['rightType'] = isset($data['rightType']) ? $data['rightType'] : null;
        $this->container['rightNature'] = isset($data['rightNature']) ? $data['rightNature'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['intendedUsage'] = isset($data['intendedUsage']) ? $data['intendedUsage'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
    * Gets issuer
    *  填发单位。
    *
    * @return string|null
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string|null $issuer 填发单位。
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets issueDate
    *  填发日期。
    *
    * @return string|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string|null $issueDate 填发日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets realEstateCertificateNo
    *  不动产证编号。
    *
    * @return string|null
    */
    public function getRealEstateCertificateNo()
    {
        return $this->container['realEstateCertificateNo'];
    }

    /**
    * Sets realEstateCertificateNo
    *
    * @param string|null $realEstateCertificateNo 不动产证编号。
    *
    * @return $this
    */
    public function setRealEstateCertificateNo($realEstateCertificateNo)
    {
        $this->container['realEstateCertificateNo'] = $realEstateCertificateNo;
        return $this;
    }

    /**
    * Gets mortgageSeals
    *  抵押印章个数。
    *
    * @return int|null
    */
    public function getMortgageSeals()
    {
        return $this->container['mortgageSeals'];
    }

    /**
    * Sets mortgageSeals
    *
    * @param int|null $mortgageSeals 抵押印章个数。
    *
    * @return $this
    */
    public function setMortgageSeals($mortgageSeals)
    {
        $this->container['mortgageSeals'] = $mortgageSeals;
        return $this;
    }

    /**
    * Gets canceledMortgageSeals
    *  注销的抵押印章个数。
    *
    * @return int|null
    */
    public function getCanceledMortgageSeals()
    {
        return $this->container['canceledMortgageSeals'];
    }

    /**
    * Sets canceledMortgageSeals
    *
    * @param int|null $canceledMortgageSeals 注销的抵押印章个数。
    *
    * @return $this
    */
    public function setCanceledMortgageSeals($canceledMortgageSeals)
    {
        $this->container['canceledMortgageSeals'] = $canceledMortgageSeals;
        return $this;
    }

    /**
    * Gets estateLocation
    *  房屋坐落。
    *
    * @return string|null
    */
    public function getEstateLocation()
    {
        return $this->container['estateLocation'];
    }

    /**
    * Sets estateLocation
    *
    * @param string|null $estateLocation 房屋坐落。
    *
    * @return $this
    */
    public function setEstateLocation($estateLocation)
    {
        $this->container['estateLocation'] = $estateLocation;
        return $this;
    }

    /**
    * Gets totalFloors
    *  总楼层数。
    *
    * @return string|null
    */
    public function getTotalFloors()
    {
        return $this->container['totalFloors'];
    }

    /**
    * Sets totalFloors
    *
    * @param string|null $totalFloors 总楼层数。
    *
    * @return $this
    */
    public function setTotalFloors($totalFloors)
    {
        $this->container['totalFloors'] = $totalFloors;
        return $this;
    }

    /**
    * Gets floor
    *  所在层。
    *
    * @return string|null
    */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
    * Sets floor
    *
    * @param string|null $floor 所在层。
    *
    * @return $this
    */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;
        return $this;
    }

    /**
    * Gets yearBuilt
    *  建成年份。
    *
    * @return string|null
    */
    public function getYearBuilt()
    {
        return $this->container['yearBuilt'];
    }

    /**
    * Sets yearBuilt
    *
    * @param string|null $yearBuilt 建成年份。
    *
    * @return $this
    */
    public function setYearBuilt($yearBuilt)
    {
        $this->container['yearBuilt'] = $yearBuilt;
        return $this;
    }

    /**
    * Gets structure
    *  结构。
    *
    * @return string|null
    */
    public function getStructure()
    {
        return $this->container['structure'];
    }

    /**
    * Sets structure
    *
    * @param string|null $structure 结构。
    *
    * @return $this
    */
    public function setStructure($structure)
    {
        $this->container['structure'] = $structure;
        return $this;
    }

    /**
    * Gets area
    *  建筑面积。
    *
    * @return string|null
    */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
    * Sets area
    *
    * @param string|null $area 建筑面积。
    *
    * @return $this
    */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
    * Gets revenueStamps
    *  印花税票个数。
    *
    * @return int|null
    */
    public function getRevenueStamps()
    {
        return $this->container['revenueStamps'];
    }

    /**
    * Sets revenueStamps
    *
    * @param int|null $revenueStamps 印花税票个数。
    *
    * @return $this
    */
    public function setRevenueStamps($revenueStamps)
    {
        $this->container['revenueStamps'] = $revenueStamps;
        return $this;
    }

    /**
    * Gets ownershipCertificateNo
    *  产权证号。
    *
    * @return string|null
    */
    public function getOwnershipCertificateNo()
    {
        return $this->container['ownershipCertificateNo'];
    }

    /**
    * Sets ownershipCertificateNo
    *
    * @param string|null $ownershipCertificateNo 产权证号。
    *
    * @return $this
    */
    public function setOwnershipCertificateNo($ownershipCertificateNo)
    {
        $this->container['ownershipCertificateNo'] = $ownershipCertificateNo;
        return $this;
    }

    /**
    * Gets estateHolder
    *  房屋所有权人。
    *
    * @return string|null
    */
    public function getEstateHolder()
    {
        return $this->container['estateHolder'];
    }

    /**
    * Sets estateHolder
    *
    * @param string|null $estateHolder 房屋所有权人。
    *
    * @return $this
    */
    public function setEstateHolder($estateHolder)
    {
        $this->container['estateHolder'] = $estateHolder;
        return $this;
    }

    /**
    * Gets obligee
    *  权利人。
    *
    * @return string|null
    */
    public function getObligee()
    {
        return $this->container['obligee'];
    }

    /**
    * Sets obligee
    *
    * @param string|null $obligee 权利人。
    *
    * @return $this
    */
    public function setObligee($obligee)
    {
        $this->container['obligee'] = $obligee;
        return $this;
    }

    /**
    * Gets ownership
    *  共有情况。
    *
    * @return string|null
    */
    public function getOwnership()
    {
        return $this->container['ownership'];
    }

    /**
    * Sets ownership
    *
    * @param string|null $ownership 共有情况。
    *
    * @return $this
    */
    public function setOwnership($ownership)
    {
        $this->container['ownership'] = $ownership;
        return $this;
    }

    /**
    * Gets propertyUnitNo
    *  不动产单元号。
    *
    * @return string|null
    */
    public function getPropertyUnitNo()
    {
        return $this->container['propertyUnitNo'];
    }

    /**
    * Sets propertyUnitNo
    *
    * @param string|null $propertyUnitNo 不动产单元号。
    *
    * @return $this
    */
    public function setPropertyUnitNo($propertyUnitNo)
    {
        $this->container['propertyUnitNo'] = $propertyUnitNo;
        return $this;
    }

    /**
    * Gets rightType
    *  权利类型。
    *
    * @return string|null
    */
    public function getRightType()
    {
        return $this->container['rightType'];
    }

    /**
    * Sets rightType
    *
    * @param string|null $rightType 权利类型。
    *
    * @return $this
    */
    public function setRightType($rightType)
    {
        $this->container['rightType'] = $rightType;
        return $this;
    }

    /**
    * Gets rightNature
    *  权利性质。
    *
    * @return string|null
    */
    public function getRightNature()
    {
        return $this->container['rightNature'];
    }

    /**
    * Sets rightNature
    *
    * @param string|null $rightNature 权利性质。
    *
    * @return $this
    */
    public function setRightNature($rightNature)
    {
        $this->container['rightNature'] = $rightNature;
        return $this;
    }

    /**
    * Gets usage
    *  使用用途。
    *
    * @return string|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param string|null $usage 使用用途。
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets intendedUsage
    *  设计、规划用途。
    *
    * @return string|null
    */
    public function getIntendedUsage()
    {
        return $this->container['intendedUsage'];
    }

    /**
    * Sets intendedUsage
    *
    * @param string|null $intendedUsage 设计、规划用途。
    *
    * @return $this
    */
    public function setIntendedUsage($intendedUsage)
    {
        $this->container['intendedUsage'] = $intendedUsage;
        return $this;
    }

    /**
    * Gets confidence
    *  各个字段的置信度。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 各个字段的置信度。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

